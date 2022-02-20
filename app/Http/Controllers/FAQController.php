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
     * Shows the index.blade.php page
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $faqs = Faq::all();

//        return view('pages/faq');
        return  view('pages/faq/index', [
            'faqs' => $faqs
        ]);
    }

    /**
     * Shows a view to create a new resource
     *
     * @returnvoid
     */
    public function create()
    {
        return \view('pages/faq/create');
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
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('pages/faq/edit', ['faq' => $faq]);
    }

    /**
     * Persist the edited resource
     *
     * @returnvoid
     */
    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = \request('question');
        $faq->answer = \request('answer');
        $faq->link = \request('link');

        $faq->save();

        return redirect('FAQ/' . $faq->id);
    }

    /**
     * Delete the resource
     *
     * @returnvoid
     */
    public function destroy()
    {
    }

    /**
     * @param $id id of the Faq you want to show
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $faq = Faq::find($id);

        return view('pages/faq/show', ['faq' => $faq]);
    }
}
