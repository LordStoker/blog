<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
