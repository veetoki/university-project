<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $order
 * @property int $parent
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
  protected $table = 'categories';
  protected $fillable = [
    'name',
    'slug',
    'order',
    'parent'
  ];  

  /**
   * undocumented function
   *
   * @return void
   */
  public function products()
  {
    return $this->hasMany('App\Product', 'id', 'category_id');
  }
  public static function getCategories() 
    {
        $categories = Category::all();
        $newArr = [];
        if (count($categories) > 0) {
            foreach ($categories as $category) {
                $newArr[$category->parent][] = $category;
            }
        }
        return $newArr;
    }
}
