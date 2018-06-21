<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tag
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tag  extends Model
{
  protected $table = 'tags';
  protected $fillable = [
    'name',
    'slug',
  ];  

  /**
   * undocumented function
   *
   * @return void
   */
  public function products()
  {
    return $this->belongsToMany('App\Product', 'product_tag', 'tag_id', 'product_id');
  }
  
}
