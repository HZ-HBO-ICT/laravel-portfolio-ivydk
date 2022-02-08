<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;

class BlogPostsController extends Controller
{
    /**
     * Shows the $blogPost.blade.php page
     *
     * @param $blogPost string name of the blogpost
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($blogPost)
    {

//        if (!array_key_exists($blogPost, $blogPosts)) {
//            abort(404, 'Sorry, that post was not found. ');
//        }

        return view($blogPost);
    }
}
