<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $summary
 * @property int $regular_price
 * @property int $sale_price
 * @property int $original_price
 * @property int $quantity
 * @property string|null $attributes
 * @property string|null $image
 * @property int $user_id
 * @property int $category_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $orders
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereRegularPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSalePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUserId($value)
 * @mixin \Eloquent
 * @property int $featured_product
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Attachment[] $attachment
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereFeaturedProduct($value)
 */
class Product extends Model
{
  protected $table = 'products';
  protected $fillable = [
    'name',
    'code',
    'author',
    'translator',
    'publisher',
    'summary',
    'regular_price',
    'sale_price',
    'original_price',
    'quantity',
    'attributes',
    'image',
    'user_id',
    'category_id'
  ];  
  /**
   * undocumented function
   *
   * @return void
   */
  public function category()
  {
    return $this->belongsTo('App\Category', 'category_id','id' );
  }
  
  public function user()
  {
    return $this->belongsTo('App\User','user_id' ,'id');
  }
  /**
   * undocumented function
   *
   * @return void
   */
  
  public function tags()
  {
    return $this->belongsToMany('App\Tag', 'product_tag', 'product_id', 'tag_id')->withTimestamps();
  }
  public function orders()
  {
    return $this->belongsToMany('App\Order', 'product_order', 'product_id', 'order_id')->withPivot('quantity')->withTimestamps();
  }
  public function attachment()
  {
    return $this->hasMany('App\Attachment','product_id','id');
  }

  public function comments()
  {
    return $this->hasMany('App\Comment','product_id','id');
  }
}
