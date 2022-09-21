<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function like()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
