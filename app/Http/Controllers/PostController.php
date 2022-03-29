<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //


        $request->validate([
            'hotelName' => 'required',
            'location' => 'required',
            'price' => 'required',
            'path'=>'required',
            'path.*'=> 'image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required',
            'desc' => 'required'
        ]);

        $imageName = time().'.'.$request->path->extension();
        $request->path->move(storage_path('app').'/public/images/', $imageName);

        Post::create([
            'hotelName'=>$request['hotelName'],
            'location'=>$request['location'],
            'price'=>$request['price'],
            'path'=>$request['path'],
            'path'=>$imageName,
            'category' =>$request['category'],
            'desc'=>$request['desc']
        ]);

        return redirect('home')->with('success', 'File has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
