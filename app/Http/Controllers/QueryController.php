<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queries = Query::all();
        return view('admin.queries.display_queries',compact('queries'));
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
        //dd($request);

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'is_solved' => 'required',
            'message' => 'required'
        ]);
        //dd($data);

        Query::create($data);
        return redirect()->back()->with('message','Submitted Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function show(Query $query)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Query $query)
    {
        if($query->is_solved == 1)
        {
            $s = 0;
        }
        else{
            $s = 1;
        }
        //dd($s);
        $query->is_solved = $s;
        $query->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function delete(Query $query)
    {
        Query::find($query->id)->delete();
        return redirect()->back();
    }
}
