<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Comment::all();
//        dd($data);
        $footer['footer'] =GeneralSetting::first();
        return view('Backend.commentList', $footer, $data);
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
    public function store($id, Request $request)
    {
        $validatedData = $request->validate([
            'name'   => 'required',
            'email'    => 'required',
            'comment' => 'required',
        ]);
        $post = BlogPost::findOrFail($id);
        $post->comments()->create([
            'name'    => $validatedData['name'],
            'email'   => $validatedData['email'],
            'comment' => $validatedData['comment'],
        ]);

        return redirect()->route('Frontend.detailsPost', ['news_id' => $post->id])->with('success', 'App Info added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Comment::find($id);
        $item->delete();
        return redirect()->route('commentList')->with('success', 'App Info delete successfully!');
    }
}
