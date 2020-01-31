<?php

namespace App\Http\Controllers;
use App\Team;
use App\Blog;
use App\User;
use App\Strimming;
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
        $teams = Team::count();
        $events = Blog::count();
        $admins = User::count();
        $streams = Strimming::orderBy('id', 'DESC')->take(1)->get();
        return view('admin.home',compact('teams','events','admins','streams'));
    }
}