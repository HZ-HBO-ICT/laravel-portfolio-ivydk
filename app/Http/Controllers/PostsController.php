<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View as ViewAlias;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

class PostsController
{
    /**
     * @param $slug
     * @return Application|Factory|ViewAlias
     */
    public function show($slug)
    {
        return view('post', [
            'name' => Person::where('name', $slug)->firstorFail()
        ]);
    }
}
