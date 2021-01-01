<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;


class ClientController extends Controller
{

    public function index(){
        $events = Event::where('is_published','1')->get()->reverse()->take(3);
        // $events = Event::get()->reverse()->take(3);
        // //dd($events);
        return view('client.index',compact('events'));
    }
    
    public function team()
    {
        return view('client.teams');
    }
    
    public function event()
    {
        $events = Event::where('is_published','1')->get()->reverse();
        // dd($events);
        $ongoings = Event::where('status','Ongoing')->get();
       //dd($ongoings);
        return view('client.events',compact('events','ongoings'));
    }

}
