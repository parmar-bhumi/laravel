<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;

class MyPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        $posts=MyPost::paginate(10);
        return view('user.index',[
            'posts'=>$posts,
            'user'=>$user
        ]);
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
        $addon=[
            'slug'=>Str::slug($request->title,'-'),
            'user_id'=>auth()->user()->id
        ];
        Mypost::create($request->all() + $addon);
        return redirect()-> route('mypost.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MyPost $myPost)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyPost $myPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyPost $myPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyPost $myPost)
    {
        //
    }
}
