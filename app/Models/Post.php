<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    // public static function find($slug): array
    // {
    //     // function callback
    //     // return Arr::first(static::all(), function ($post) use ($slug) {
    //     //     return $post['slug'] == $slug;
    //     // });

    //     // arrow function
    //     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    //     if (!$post) {
    //         abort(404);
    //     }

    //     return $post;
    // }
}
