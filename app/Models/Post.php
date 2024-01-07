<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function getRouteKeyName(){
        return "slug";
    }

    protected $fillable = [
        'title',
        'slug',
        'body',
        'category_id'
    ];

    use HasFactory;
}
