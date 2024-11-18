<?php

namespace App\Models;


use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }
}
