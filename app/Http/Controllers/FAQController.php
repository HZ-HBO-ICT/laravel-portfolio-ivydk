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

    /**
     * Shows a view to create a new resource
     *
     * @returnvoid
     */
    public function create()
    {
        return \view('pages/faq-form');
    }

    /**
     * Persist the new resource
     *
     * @returnvoid
     */
    public function store()
    {
//        dump(request()->all());
        // persist the new article
        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();
        return redirect('/FAQ');
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
}
