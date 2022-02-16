<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
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

    /**
     * Shows a view to create a new resource
     *
     * @returnvoid
     */
    public function create()
    {
        return \view('/pages/article-create');
    }

    /**
     * Persist the new resource
     *
     * @returnvoid
     */
    public function store()
    {
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->picture = request('picture');


        $article->save();
        return redirect('/articles');
    }

    /**
     * Show a view to edit an existing resource
     *
     * @returnvoid
     */
    public function edit()
    {
    }

    /**
     * Persist the edited resource
     *
     * @returnvoid
     */
    public function update()
    {
    }

    /**
     * Delete the resource
     *
     * @returnvoid
     */
    public function destroy()
    {
    }

    public function index()
    {
        $articles = Article::all();

        return view('pages/article', ['articles' => $articles]);
    }
}
