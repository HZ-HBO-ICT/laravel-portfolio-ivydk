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
     * @param Article $article
     * @return Application|Factory|View
     */
    public function show(Article $article)
    {
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
    public function store(Request $request)
    {
        Article::create($this->validatedArticle($request));

        return redirect('/articles');
    }

    /**
     * Show a view to edit an existing resource
     *
     * @return Application|Factory|View
     */
    public function edit(Article $article)
    {
        return view('pages/articles/edit', ['article' => $article]);
    }

    /**
     * Persist the edited resource
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Article $article, Request $request)
    {
        $article->update($this->validatedArticle($request));

        return redirect(route('articles.show', $article));
    }

    /**
     * Delete the resource
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();

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

    /**
     * @return array
     */
    protected function validatedArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
