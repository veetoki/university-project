<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Comment
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $content
 * @property int $rating
 * @property int $product_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Product $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'name',
        'email',
        'content',
        'rating',
        'product_id',
    ];

    public function products(Type $var = null)
    {
        return $this->belongsTo('App\Product','product_id','id');
    }
}
