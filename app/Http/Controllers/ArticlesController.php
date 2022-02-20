<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

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
     * @return Application|Factory|View
     */
    public function create()
    {
        return \view('/pages/articles/create');
    }

    /**
     * Persist the new resource
     *
     * @return Application
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
     * @return Application|Factory|View
     */
    public function edit($articleID)
    {
        $article = Article::find($articleID);
        return view('pages/articles/edit', ['article' => $article]);
    }

    /**
     * Persist the edited resource
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function update($articleID)
    {
        $article = Article::find($articleID);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->picture = request('picture');


        $article->save();

        return redirect('articles/' . $article->id);
    }

    /**
     * Delete the resource
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy($articleID)
    {
        $faq = Article::find($articleID);

        $faq->delete();

        return redirect('articles');
    }

    /**
     * Shows a view with all the articles on a page
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $articles = Article::all();

        return view('pages/articles/index', ['articles' => $articles]);
    }
}
