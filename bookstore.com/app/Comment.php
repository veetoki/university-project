<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
