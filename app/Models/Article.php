<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';
    protected $fillable = ['title','article'];
    public function comments_r() {
        return $this->hasMany('App\Comment');

    }
}
