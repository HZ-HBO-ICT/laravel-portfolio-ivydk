<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Shows the article page
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        $articles = Article::all();
//        $articles = Article::latest()::get();
        return view('pages\test', [
            'articles' => $articles
        ]);
    }
}
