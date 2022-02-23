<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Shows the index.blade.php page
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $grades = Grade::all();

        return  view('pages.grades.index', [
            'grades' => $grades
        ]);
    }

    /**
     * Shows a view to create a new resource
     *
     * @returnvoid
     */
    public function create()
    {
        return \view('pages.grades.create');
    }

    /**
     * Persist the new resource
     *
     * @returnvoid
     */
    public function store(Request $request)
    {
        Grade::create($this->validatedGrade($request));

        return redirect(route('grades.index'));
    }

//    /**
//     * Show a view to edit an existing resource
//     *
//     * @param Faq $faq
//     * @return Application|Factory|View
//     */
//    public function edit(Faq $faq)
//    {
////        $faq = Faq::find($id);
//        return view('pages.faq.edit', ['faq' => $faq]);
//    }
//
//    /**
//     * Persist the edited resource
//     *
//     * @return void
//     */
//    public function update(Faq $faq, Request $request)
//    {
//        $faq->update($this->validatedFaq($request));
//
//        return redirect(route('faq.show', $faq));
//    }
//
//    /**
//     *  Shows the recourse
//     *
//     * @param Faq $faq
//     * @return Application|Factory|View
//     */
//    public function show(Grade $faq)
//    {
////        $faq = Faq::find($id);
//
//        return view('pages.grade.show', ['grade' => $grade]);
//    }
//
//
//    /**
//     * Delete the resource
//     *
//     * @param Faq $faq
//     * @return Application|RedirectResponse|Redirector
//     */
//    public function destroy(Faq  $faq)
//    {
//        $faq->delete();
//
//        return redirect(route('grade.index'));
//    }

    /**
     * @param Request $request
     * @return array
     */
    protected function validatedGrade(Request $request): array
    {
        return [
            'quartile' => 'required',
            'course_name' => 'required',
            'test_name' => 'required',
            'EC' => 'required',
            'lowest_passing_grade' => 'required',
            'best_grade' => 'required'
        ];
    }
}
