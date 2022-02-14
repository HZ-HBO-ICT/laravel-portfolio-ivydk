<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Shows the faq.blade.php page
     *
     * @return Application|Factory|View
     */
    public function show()
    {

        $posts = Faq::all();

//        return view('pages/faq');
        return  view('pages/faq', [
            'posts' => $posts
        ]);
    }
}
