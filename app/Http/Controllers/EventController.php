<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        //dd($events);
        return view('admin.events.add_event',compact('events'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        $data =$request->validate([
            'title' => 'required',
            'e_image' => 'required',
            'description' => 'required'
        ]);
        $event = new Event();

        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->is_published = $request->input('is_published');
        $event->status = $request->input('status');

        if($request->hasfile('e_image')){
            $file = $request->file('e_image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'. $extension;
            $file->move("images/events/",$filename);
            $event->e_image = $filename;
        }else{
            return '404';
        }
        
        //dd($event);
        $event->save();
        return redirect()->back()->with('message', 'Successfully Added');
    }

    public function show(Event $event)
    {
        //
    }

    public function edit(Event $event)
    {
       return view('admin.events.edit_event',compact('event'));
    }

    
    public function update(Request $request, Event $event)
    {
        $data =$request->validate([
            'title' => 'required',
            'description' => 'required',
            'is_published' => 'required',
            'status' => 'required'
        ]);
        
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->is_published = $request->input('is_published');
        $event->status = $request->input('status');

        if($request->hasfile('e_image')){
            $file = $request->file('e_image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'. $extension;
            $file->move("images/events/",$filename);
            $event->e_image = $filename;
        }

        $event->save();
        return redirect()->back()->with('message', 'Successfully Updated');
        
    
    
    
    }

    public function delete(Event $event)
    {
       //dd($event);
       $event->delete();
       return redirect()->back()->with('message', 'Deleted Successfully');
    }
}