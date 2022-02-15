<?php

namespace App\Models;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlesController extends Model
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
