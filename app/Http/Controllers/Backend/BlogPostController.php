<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPost = BlogPost::with(['category', 'author'])->get();
//        dd($blogPost);
        return view('Backend.blogPostList', ['blogPost'=> $blogPost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
//        dd($category);
        return view('Backend.createBlogPost', ['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Post_Title' => 'required',
            'Post_Content' => 'required',
            'Category_Id' => 'required',
            'Status' => 'required',
            'Post_Image' => 'required',

        ]);

        $imageName = '';
        if($image = $request->file('Post_Image')){
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('uploads'), $imageName);
        }
        BlogPost::create(array_merge($request->all(), [
            'Post_Image' => $imageName,
            'create_by' => auth()->id(),
            'Feature'=>$request->has('Feature'),
            'Tranding'=>$request->has('Tranding')
        ]));

        return redirect()->route('Backend.blogPostList')->with('success', 'Blog added successfully!');
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
        $blogPost = BlogPost::where('id', $id)->first();
        $categories = Category::all();
        return view('Backend.updateBlogPost', ['blogPost'=> $blogPost, 'categories'=> $categories]);
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
        $request->validate([
            'Post_Title' => 'required',
            'Post_Content' => 'required',
            'Category_Id' => 'required',
            'Status' => 'required',
            'Post_Image' => 'nullable|image',

        ]);

        $blogPost = BlogPost::findOrFail($id);

        if ($image = $request->file('Post_Image')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('uploads'), $imageName);
            $blogPost->Post_Image = $imageName;
        }

        $blogPost->Post_Title = $request->Post_Title;
        $blogPost->Post_Content = $request->Post_Content;
        $blogPost->Category_Id = $request->Category_Id;
        $blogPost->Status = $request->Status;
        $blogPost->Feature = $request->has('Feature');
        $blogPost->Tranding = $request->has('Tranding');

        $blogPost->save();

        return redirect()->route('Backend.blogPostList')->with('success', 'Blog updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = BlogPost::find($id);
        $category->delete();
        return redirect()->route('Backend.blogPostList')->with('success', 'Blog Delete successfully');
    }
}
