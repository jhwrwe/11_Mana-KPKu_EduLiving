<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use App\Http\Requests\StoreTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;

class TeachersController extends Controller
{
    public function index(){
        return view('view_teacher',[
            "pagetitle" => "projek",
        "maintitle" => "projek data",
        'projects' => Teachers::all(),
        "ActiveTeachersText"=> "md:dark:text-blue-500"
        ]);
    }

    public function Show_Teachers_info($id){
        $project = Teachers::find($id);
            return view('teacher_info',[
                'pagetitle' => 'project',
                'maintitle' => 'project Data',
                'project'=> $project,
                'ActiveTeacherInfo'=> 'md:dark:text-blue-500'
            ]);
        }
        public function Show_teachers_cv($id){
            $project = Teachers::find($id);
                return view('Teachers_CV',[
                    'pagetitle' => 'project',
                    'maintitle' => 'project Data',
                    'project'=> $project,
                    'ActiveTeacherCV'=>'md:dark:text-blue-500'
                ]);
            }
}
