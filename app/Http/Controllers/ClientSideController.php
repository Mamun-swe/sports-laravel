<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Team;
use App\Strimming;
use Illuminate\Http\Request;

class ClientSideController extends Controller
{
    public function home(){
        $teams = Team::orderBy('id', 'DESC')->take(6)->get();
        $events = Blog::orderBy('id', 'DESC')->take(3)->get();
        $streaming = Strimming::orderBy('id', 'DESC')->take(1)->get();
        return view('landing',compact('teams','events','streaming'));
    }

    public function allEvents(){
        $data = Blog::orderBy('id', 'DESC')->paginate(12);
        return view('events',compact('data'));
    }

    public function singleEvent($id){
        $event = Blog::whereId($id)->first();
        if($event){
            return view('show-event')->withDetails($event);
        } else {
            return view('show-event')->withMessage("No result found");
        }
    }

    public function allTeam(){
        $data = Team::orderBy('id', 'DESC')->paginate(12);
        return view('teams',compact('data'));
    }

    public function singleTeam($id){
        $team = Team::whereId($id)->first();
        if($team){
            return view('show-team')->withDetails($team);
        } else {
            return view('show-team')->withMessage("No result found");
        }
    }

    public function about(){
        return view('about');
    }

    public function joinWithUs(){
        return view('registration');
    }
}