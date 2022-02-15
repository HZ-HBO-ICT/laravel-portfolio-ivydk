<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Shows the correct article body
     *
     * @param $articleID
     * @return Application|Factory|View
     */
    public function show($articleID)
    {
        $article = Article::find($articleID);

        return view('pages/articles/show', ['article' => $article]);
    }
}
