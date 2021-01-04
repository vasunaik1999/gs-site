<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;


class ClientController extends Controller
{

    public function index(){
        $events = Event::where('is_published','1')->where('status','!=','Cancelled')->get()->reverse()->take(3);
        // $events = Event::get()->reverse()->take(3);
        //dd($events);
        return view('client.index',compact('events'));
    }
    
    public function team()
    {
        return view('client.teams');
    }
    
    public function event()
    {
        // $events = Event::where('is_published','1')->get()->reverse();
        // dd($events);
        $ongoings = Event::where('status','Ongoing')->where('is_published','1')->get();
        $upcomings = Event::where('status','Upcoming')->where('is_published','1')->get();
        $pasts = Event::where('status','Completed')->where('is_published','1')->get();
        //dd($ongoings);
        return view('client.events',compact('upcomings','ongoings','pasts'));
    }

}
