<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'description',
        'image',
        'date',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
