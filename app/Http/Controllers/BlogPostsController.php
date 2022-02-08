<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;

class BlogPostsController extends Controller
{
    public function show($blogPost)
    {

//        if (!array_key_exists($blogPost, $blogPosts)) {
//            abort(404, 'Sorry, that post was not found. ');
//        }

        return view($blogPost);
    }
}
