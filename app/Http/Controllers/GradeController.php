<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Grade;
use Faker\Provider\el_GR\Address;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

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

    /**
     * Show a view to edit an existing resource
     *
     * @param Grade $grade
     * @return Application|Factory|View
     */
    public function edit(Grade $grade)
    {
        return view('pages.grades.edit', ['grade' => $grade]);
    }

    /**
     * Persist the edited resource
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Grade $grade, Request $request)
    {
        $grade->update($this->validatedFaq($request));

        return redirect(route('grades.show', $grade));
    }

//    /**
//     *  Shows the recourse
//     *
//     * @param Grade $grade
//     * @return Application|Factory|View
//     */
//    public function show(Grade $grade)
//    {
//        return view('pages.grade.show', ['grade' => $grade]);
//    }


    /**
     * Delete the resource
     *
     * @param Grade $grade
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect(route('grades.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function validatedGrade(Request $request): array
    {
        return $request->validate([
            'quartile' => ['required', 'digits_between:1,4'],
            'course_name' => 'required',
            'test_name' => 'required',
            'EC' =>['required', 'digits_between:0,60'],
            'lowest_passing_grade' => ['required', 'digits_between:0,10'],
            'best_grade' => ['required', 'digits_between:0,10']
        ]);
    }
}
