<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'klasses';

    public static function findBySlug($slug)
    {
        return Klass::where('slug', $slug)->first();
    }
}
