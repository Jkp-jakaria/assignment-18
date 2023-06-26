<?php

namespace App\Models;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(post::class);
    }

    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}
