<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Http\Requests\StoreSchoolsRequest;
use App\Http\Requests\UpdateSchoolsRequest;

class SchoolsController extends Controller
{
    public function index(){
        return view('view_schools',[
        'projects' => Schools::all(),
        "ActiveSchoolsText"=>  "md:dark:text-blue-500"
        ]);
    }
    public function Show_Schools_info($id){
        $project = Schools::find($id);
            return view('Schools_info',[
                'project'=> $project,
                "ActiveSchoolsInfo"=>  'md:dark:text-blue-500'
            ]);
}
}
