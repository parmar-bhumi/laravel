<?php

namespace App\Http\Controllers;

use App\Models\Myblog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MyblogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myblogs = Myblog::get();
        //return $myblogs;
        return view('user.index',compact('myblogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | alpha_num:ascii',
            'subtitle' => 'required | alpha:ascii',
            'body_content' => 'required |  ',
            'user_id' => 'required',
            //'slug' => 'required'
        ]);
        return $request->all();

     $myblog = new myblog();
     //return $request->all();
     $myblog->create($request->all());
    //     $myblog->title = $request->title; 
    //     $myblog->subtitle = $request->subtitle;
    //     $myblog->body_content = $request->body_content;
    //     $myblog->user_id = $request->user_id;
    //     $myblog->slug = Str::of('$request->title')->slug('-');
    //     $myblog->save();
    //     return redirect()->route('myblog.index');
    // 
    }
    /**
     * Display the specified resource.
     */
    public function show(Myblog $myblog)
    {
        return view('user.show',compact('myblog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Myblog $myblog)
    {
        return view('user.edit',compact('myblog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Myblog $myblog)
    {
        $myblog->title = $request->title; 
        $myblog->subtitle = $request->subtitle;
        $myblog->body_content = $request->body_content;
        $myblog->user_id = $request->user_id;
        $myblog->slug = Str::of('$request->title')->slug('-');
        $myblog->save();
        return redirect()->route('myblog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Myblog $myblog)
    {
        $myblog->delete();
        return redirect()->route('myblog.index');
    }
}
