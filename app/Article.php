<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public static function articles()
    {
    	return Article::latest()->paginate(12);
    }

    public static function latestArticles()
    {
    	return Article::latest()->paginate(3);
    }

    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }
}
