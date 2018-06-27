<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Tag;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\lib\Facades\Tool;
use App\Attachment;

class ProductController extends Controller
{
  /**
   * undocumented function
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * undocumented function
   *
   * @return void
   */
  public function index()
  {
    $data['products'] = Product::with('user')->orderBy('featured_product','desc')
                                             ->orderBy('id','desc')
                                             ->paginate(10);
    return view('admin.product.index', $data);
  }

  /**
   *      * Show the profile for the given product.
       '       *           *
   *                * @param  int  $id
   *                     * @return Response
   *                          */
  public function show($id)
  {
    $data['product'] = Product::find($id);
    $data['categories'] = $this->createCategories(Category::orderBy('name', 'asc')->get());
    //Lay gia tri menu don cap
    if ($data['product'] !== null) {
      return view('admin.product.show', $data);
    }
    return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm này');
  }
  /**
   * create product function
   *
   * @return void
   */
  public function create()
  {
    $data['categories'] = $this->createCategories(Category::orderBy('name', 'asc')->get());
    return view('admin.product.create', $data);
  }

  /**
   * store product function
   *
   * @return void
   */
  public function store(Request $request)
  {
    $valid = Validator::make(
      $request->all(),
      [
        'name' => 'required',
        'code' => "required|unique:products,code",
        'summary' => 'required',
        'regular_price' => 'required|numeric|min:0',
        'sale_price' => 'required|numeric|min:0',
        'original_price' => 'required|numeric|min:0',
        'quantity' => 'required|numeric|min:0',
        'image' => 'image|max:51200',
        'images.*' => 'image|max:51200',
        'category_id' => 'required|exists:categories,id',
      ],
      [
        'name.required' => 'Vui lòng nhập vào tên sản phẩm',
        'code.unique' => 'Mã sản phẩm đã tồn tại',
        'code.required' => 'Vui lòng nhập Mã sản phẩm',
        'summary.required' => 'Vui lòng nhập nội dung',
        'category_id' => 'Vui lòng nhập id của chuyên mục',
        'category_id.exists' => 'Vui lòng nhập đúng id của chuyên mục',
        'regular_price.required' => 'Vui lòng nhập giá thị trường',
        'regular_price.numeric' => 'Vui lòng nhập số',
        'regular_price.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'sale_price.required' => 'Vui lòng nhập giá bán',
        'sale_price.numeric' => 'Vui lòng nhập số',
        'sale_price.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'original_price.required' => 'Vui lòng nhập giá gốc',
        'original_price.numeric' => 'Vui lòng nhập số',
        'original_price.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'quantity.required' => 'Vui lòng nhập số lượng',
        'quantity.numeric' => 'Vui lòng nhập số',
        'quantity.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'image.image' => "Không đúng chuẩn hình ảnh cho phép",
        'image.max' => 'Dung lượng vượt quá giới hạn cho phép là :max KB',
      ]
    );
    if ($valid->fails()) {
      return redirect()->back()->withErrors($valid)->withInput();
    } else {
      $imageName = null;
      if ($request->hasFile('image')) {
        $imageName = $this->saveImage($request->file('image'));
      }

      //Them attributes
      $attributes = null;
      if ($request->has('attributes') && is_array($request->input('attributes')) && count($request->input('attributes'))) {
        $attributes = $request->input('attributes');
        foreach ($attributes as $key => $attribute) {
          if (!isset($attribute['name'])) {
            unset($attributes[$key]);
            continue;
          }
          if (!isset($attribute['value'])) {
            unset($attributes[$key]);
            continue;
          }
        }
        $attributes = json_encode($attributes);
      }

      $product = Product::create([
        'name' => $request->input('name'),
        'code' => mb_strtoupper($request->input('code'), 'UTF-8'),
        'summary' => $request->input('summary'),
        'regular_price' => $request->input('regular_price'),
        'sale_price' => $request->input('sale_price'),
        'original_price' => $request->input('original_price'),
        'quantity' => $request->input('quantity'),
        'image' => $imageName,
        'attributes' => $attributes,
        'user_id' => auth()->id(),
        'category_id' => $request->input('category_id'),
      ]);
        // Thêm vào thư viện hình ảnh  
      if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
          Attachment::create([
            'type' => 'image',
            'mime' => $file->getMimeType(),
            'path' => $this->saveImage($file),
            'product_id' => $product->id,
          ]);
        }

      }

      //Them tags
      if ($request->has('tags') && is_array($request->input('tags')) && count($request->input('tags'))) {
        $tags = $request->input('tags');
        $tagsID = [];
        foreach ($tags as $tag) {
          $tag = Tag::firstOrCreate(
            [
              'name' => str_slug($tag),
            ],
            [
              'name' => str_slug($tag),
              'slug' => str_slug($tag)
            ]
          );
          $tagsID[] = $tag->id;
        }
        $product->tags()->sync($tagsID);
      }
      return redirect()->route('admin.product')->with('message', "Tạo sản phẩm $product->name thành công");
    }
    return 'store';
  }

  /**
   * Edit Product Infomation 
   *
   * @return void
   */
  public function update(Request $request, $id)
  {
    $valid = Validator::make(
      $request->all(),
      [
        'name' => 'required',
        'code' => "required|unique:products,code," . $id,
        'summary' => 'required',
        'regular_price' => 'required|numeric|min:0',
        'sale_price' => 'required|numeric|min:0',
        'original_price' => 'required|numeric|min:0',
        'quantity' => 'required|numeric|min:0',
        'image' => 'image|max:51200',
        'images.*' => 'image|max:51200',
        'category_id' => 'required|exists:categories,id',
      ],
      [
        'name.required' => 'Vui lòng nhập vào tên sản phẩm',
        'code.unique' => 'Mã sản phẩm đã tồn tại',
        'code.required' => 'Vui lòng nhập Mã sản phẩm',
        'summary.required' => 'Vui lòng nhập nội dung',
        'category_id' => 'Vui lòng nhập id của chuyên mục',
        'category_id.exists' => 'Vui lòng nhập đúng id của chuyên mục',
        'regular_price.required' => 'Vui lòng nhập giá thị trường',
        'regular_price.numeric' => 'Vui lòng nhập số',
        'regular_price.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'sale_price.required' => 'Vui lòng nhập giá bán',
        'sale_price.numeric' => 'Vui lòng nhập số',
        'sale_price.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'original_price.required' => 'Vui lòng nhập giá gốc',
        'original_price.numeric' => 'Vui lòng nhập số',
        'original_price.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'quantity.required' => 'Vui lòng nhập số lượng',
        'quantity.numeric' => 'Vui lòng nhập số',
        'quantity.min' => 'Vui lòng nhập số nhỏ nhất cho phép là :min',
        'image.image' => "Không đúng chuẩn hình ảnh cho phép",
        'image.max' => 'Dung lượng vượt quá giới hạn cho phép là :max KB',
        'images.*.image' => "Không đúng chuẩn hình ảnh cho phép",
        'images.*.max' => 'Dung lượng vượt quá giới hạn cho phép là :max KB',
      ]
    );
    $valid->sometimes('parent', 'exists:products,id', function ($input) {
      return $input->parent !== '0';
    });
    if ($valid->fails()) {
      return redirect()->back()->withErrors($valid)->withInput();
    } else {
      $product = Product::find($id);
      if ($product !== null) {
        $imageName = $product->image;
        if ($request->hasFile('image')) {
          $this->deleteImages($product->image);
          $imageName = $this->saveImage($request->file('image'));        
          }
        }
          // Cập nhật thư viện hình ảnh 
        if ($request->hasFile('images')) {
          foreach ($product->attachment as $file) {
            $this->deleteImages($file->path);
            $file->delete();
          }
          foreach ($request->file('images') as $file) {
            Attachment::create([
              'type' => 'image',
              'mime' => $file->getMimeType(),
              'path' => $this->saveImage($file),
              'product_id' => $product->id,
            ]);
          }
        }
        //Them attributes
        $attributes = "";
        if ($request->has('attributes') && is_array($request->input('attributes')) && count($request->input('attributes'))) {
          $attributes = $request->input('attributes');
          foreach ($attributes as $key => $attribute) {
            if (!isset($attribute['name'])) {
              unset($attributes[$key]);
              continue;
            }
            if (!isset($attribute['value'])) {
              unset($attributes[$key]);
              continue;
            }
          }
          $attributes = json_encode($attributes);
        }


        $product->name = $request->input('name');
        $product->code = mb_strtoupper($request->input('code'), 'UTF-8');
        $product->regular_price = $request->input('regular_price');
        $product->sale_price = $request->input('sale_price');
        $product->original_price = $request->input('original_price');
        $product->quantity = $request->input('quantity');
        $product->image = $imageName;
        $product->attributes = $attributes;
        $product->user_id = auth()->id();
        $product->category_id = $request->input('category_id');
        $product->save();
        //Them tags
        if ($request->has('tags') && is_array($request->input('tags')) && count($request->input('tags'))) {
          $tags = $request->input('tags');
          $tagsID = [];
          foreach ($tags as $tag) {
            $tag = Tag::firstOrCreate(
              [
                'name' => str_slug($tag),
              ],
              [
                'name' => str_slug($tag),
                'slug' => str_slug($tag)
              ]
            );
            $tagsID[] = $tag->id;
          }
          $product->tags()->sync($tagsID);
        }
        return redirect()->route('admin.product')->with('message', "Cập nhật  sản phẩm <a href='".route('admin.product.show',['id' => $id])."'>$product->name</a> thành công");
    }
    return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm này');
  }

  /**
   * Delete Product Information
   *
   * @return void
   */

  public function delete($id)
  {
    $product = Product::find($id);
    if ($product !== null) {
      deleteImages($product->image);
      if (count($product->attachment) > 0) {
        foreach ($product->attachment as $file) {
          $this->deleteImages($file->path);
        }
      }
      $product->delete();
      return redirect()->route('admin.product')->with('message', "Xóa sản phẩm $product->name thành công");
    }
    return redirect()->route('admin.product')->with('error', "Không tìm thấy sản phẩm này");
  }

  public function setFeaturedProduct($id)
  {
    $product = Product::find($id);
    if ($product !== null) {
      $product->featured_product = !$product->featured_product;
      $product->save();
      return redirect()->route('admin.product')
      ->with('message',"Đặt $product->name là sản phẩm bán chạy thành công");
    }
    return redirect()->route('admin.product')->with('error', "Không tìm thấy sản phẩm này");

  }
  public function saveImage($image)
  {
    if (!empty($image) && file_exists(public_path('uploads'))) {
      $folderName = date('Y-m');
      $fileNameWithTimestamp = md5($image->getClientOriginalName() . time());
      $fileName = $fileNameWithTimestamp . '.' . $image->getClientOriginalExtension();
      if (!file_exists(public_path('uploads/' . $folderName))) {
        mkdir(public_path('uploads/' . $folderName), 0755);
      }
      $image->move(public_path('uploads/' . $folderName), $fileName);
      $imageName = "$folderName/$fileName";
      $createImage = function ($suffix = '_thumb', $width = 250, $height = 170) use ($fileNameWithTimestamp, $image, $folderName, $fileName) {
        $thumbnailFileName = $fileNameWithTimestamp . $suffix . '.' . $image->getClientOriginalExtension();
        Image::make(public_path("uploads/$folderName/$fileName"))
          ->resize($width, $height)
          ->save(public_path("uploads/$folderName/$thumbnailFileName"));
      };
      $createImage();
      $createImage('_450x337',450,337);
      $createImage('_80x80',80,80);
    }
    return $imageName;
  }

  public function deleteImages($path)
  {
    if (!is_dir(public_path('uploads/' . $path)) && file_exists(public_path('uploads/' . $path))) {
      unlink(public_path('uploads/' . $path));
      $deleteAllImages = function($suffixs) use($path){
        foreach ($suffixs as $suffix) {
          if (!is_dir(public_path('uploads/' . get_thumbnail($path,$suffix))) && file_exists(public_path('uploads/' . get_thumbnail($path,$suffix)))) {
            unlink(public_path('uploads/' . get_thumbnail($path,$suffix)));
          }
        }
      };
      $deleteAllImages(['_thumb', '_450x337', '_80x80']);
    }
  }

  public function createCategories($categories) 
  {
    $newArr = [];
    if (count($categories) > 0) {
      foreach ($categories as $category) {
        $newArr[$category->parent][] = $category;
      }
    }
    return $newArr;
  }

}