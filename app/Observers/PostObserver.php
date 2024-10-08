<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostObserver
{
    public function created(Post $post)
    {
        Log::info("Post created: {$post->title}");
    }

    public function updated(Post $post)
    {   
        Log::info("Post updated: {$post->title}");
    }

    public function deleted(Post $post)
    {
        Log::info("Post deleted: {$post->title}");
    }
}
