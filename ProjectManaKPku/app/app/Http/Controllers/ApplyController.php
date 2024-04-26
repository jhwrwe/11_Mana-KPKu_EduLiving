<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\schools;
use App\Models\teachers;
use App\Http\Requests\StoreApplyRequest;
use App\Http\Requests\UpdateApplyRequest;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applies = Apply::with('schools', 'teachers')->get();

        return view('view_apply', ['applies' => $applies,
    'teacher'=>teachers::all(),'schools'=>schools::all(),
    "ActiveApplyText"=>  "md:dark:text-blue-500"
]);
    }


}
