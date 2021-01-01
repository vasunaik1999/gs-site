<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        // /dd($teams);
        return view('admin.team.add_member',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->validate([
            'name' => 'required',
            'image' => 'required',
            'section_title' => 'required',
            'role' => 'required',
            'status' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'insta' => 'required'
        ]);

        $team = new Team();
        $team->name = $request->input('name');
        $team->section_title = $request->input('section_title');
        $team->role = $request->input('role');
        $team->linkedin =$request->input('linkedin');
        $team->twitter =$request->input('twitter');
        $team->insta = $request->input('insta');
        $team->status = $request->input('status');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'. $extension;
            $file->move("images/team/",$filename);
            $team->image = $filename;
        }else{
            return '404';
        }
        
        //dd($event);
        $team->save();
        return redirect()->back()->with('message', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit_member',compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $data =$request->validate([
            'name' => 'required',
            'section_title' => 'required',
            'role' => 'required',
            'status' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'insta' => 'required'
        ]);

        $team->name = $request->input('name');
        $team->section_title = $request->input('section_title');
        $team->role = $request->input('role');
        $team->linkedin =$request->input('linkedin');
        $team->twitter =$request->input('twitter');
        $team->insta = $request->input('insta');
        $team->status = $request->input('status');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'. $extension;
            $file->move("images/team/",$filename);
            $team->image = $filename;
        }

        $team->save();
        return redirect()->back()->with('message', 'Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function delete(Team $team)
    {
        Team::find($team->id)->delete();
        return redirect()->back();
    }
}