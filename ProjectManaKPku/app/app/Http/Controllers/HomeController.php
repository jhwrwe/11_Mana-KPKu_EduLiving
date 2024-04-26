<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\schools;
use App\Models\teachers;
use App\Http\Requests\StoreApplyRequest;
use App\Http\Requests\UpdateApplyRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function help(){
    return view('help',[
        "pagetitle" => "About",
        "maintitle" => "About My Library",
        "Activecontacttext"=>"md:dark:text-blue-500"
    ]);
    }
    public function index(){
        return view('index',[
            "pagetitle" => "Home",
        "maintitle" => "",
        "ActiveMaintext"=>"md:dark:text-blue-500",
        ]);
    }

    public function about(){
    return view('tentangkita',[
        "pagetitle" => "About",
        "maintitle" => "About My Library",
        "ActiveAbouttext"=>"md:dark:text-blue-500"
    ]);
}
}



