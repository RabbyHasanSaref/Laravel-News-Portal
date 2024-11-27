<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $data['data'] = Comment::all();
//        dd($data);
        $footer['footer'] =GeneralSetting::first();
        return view('Backend.commentList', $footer, $data);
    }


    public function create()
    {
        //
    }


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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $item = Comment::find($id);
        $item->delete();
        return redirect()->route('commentList')->with('success', 'App Info delete successfully!');
    }
}
