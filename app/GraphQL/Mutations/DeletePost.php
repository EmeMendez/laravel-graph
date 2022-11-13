<?php

namespace App\GraphQL\Mutations;

use App\Models\Post;

final class DeletePost
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Post::find($args['id']);
        $post->is_active = 0;
        $post->save();
        return $post;
    }
}
