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
        return  view('pages.faq.index', [
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
        return \view('pages.faq.create');
    }

    /**
     * Persist the new resource
     *
     * @returnvoid
     */
    public function store(Request $request)
    {
        Faq::create($this->validatedFaq($request));

        return redirect(route('faq.index'));
    }

    /**
     * Show a view to edit an existing resource
     *
     * @param Faq $faq
     * @return Application|Factory|View
     */
    public function edit(Faq $faq)
    {
//        $faq = Faq::find($id);
        return view('pages.faq.edit', ['faq' => $faq]);
    }

    /**
     * Persist the edited resource
     *
     * @returnvoid
     */
    public function update(Faq $faq, Request $request)
    {
        $faq->update($this->validatedFaq($request));

        return redirect(route('faq.show', $faq));
    }

    /**
     *  Shows the recourse
     *
     * @param Faq $faq
     * @return Application|Factory|View
     */
    public function show(Faq $faq)
    {
//        $faq = Faq::find($id);

        return view('pages.faq.show', ['faq' => $faq]);
    }


    /**
     * Delete the resource
     *
     * @param Faq $faq
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(Faq  $faq)
    {
        $faq->delete();

        return redirect(route('faq.index'));
    }

    protected function validatedFaq(Request $request)
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
