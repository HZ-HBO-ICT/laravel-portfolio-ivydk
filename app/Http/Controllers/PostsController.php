<?php

namespace App\Http\Controllers;

class PostsController
{
    /**
     * function to show the post.blade.php
     *
     * @param $post string what post you should load
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        ];

        if (!array_key_exists($post, $posts))
        {
            abort(404, 'Sorry, that post was not found. ');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
