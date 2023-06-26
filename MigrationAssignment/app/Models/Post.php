<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryPostCount($categoryId)
    {
        return $this->where('category_id', $categoryId)->count();
    }

    public static function getSoftDeletedPosts()
    {
        return static::onlyTrashed()->get();
    }
}

