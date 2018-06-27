<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Attachment
 *
 * @property int $id
 * @property string $type
 * @property string $mime
 * @property string $path
 * @property int|null $product_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attachment whereMime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attachment wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attachment whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attachment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Attachment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Attachment extends Model
{
    protected $fillable = [
        'id',
        'type',
        'mime',
        'path',
        'product_id',
    ];
    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');    
    }
}
