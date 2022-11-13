<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        $post->title = trim($post->title);
        $post->slug  = Str::slug($post->title);
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        $post->title  = trim($post->title);
        $post->slug   = Str::slug($post->title);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {

    }
}
