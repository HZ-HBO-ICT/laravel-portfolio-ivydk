<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Shows the dashboard.blade.php page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $grades = Grade::all();
        return view('pages/dashboard', [
            'grades' => $grades
        ]);
    }
}
