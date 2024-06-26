<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexforadmin()
    {
        return view('admin.home');
    }


    public function index2() {
        return view ('homecopy');
    }
    public function seeuser()
    {
        $user = User::all();
        return view('admin.view_alluser', compact('user'));

    }
    public function adminhome()
    {
        return view('admin.home');
    }
    public function delete(User $user){
        $user->delete();
        $users = User::all();
        return view('admin.view_alluser',compact('users'));
    }

}
