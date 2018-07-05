<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @property int $id
 * @property int $user_id
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUserId($value)
 * @mixin \Eloquent
 * @property string $name
 * @property-read \App\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereName($value)
 */
class Order extends Model
{
  protected $table = 'orders';
  protected $fillable = [
    'user_id',
    'name',
    'address',
    'email',
    'phone',
    'status'
  ];  

  /**
   * undocumented function
   *
   * @return void
   */
  public function products()
  {
    return $this->belongsToMany('App\Product', 'product_order', 'order_id', 'product_id')->withPivot('quantity')->withTimestamps();
  }
  
  public function users()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');
  }
}
