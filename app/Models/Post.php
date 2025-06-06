<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = ['title', 'slug', 'description', 'content', 'status', 'thumbnail', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
