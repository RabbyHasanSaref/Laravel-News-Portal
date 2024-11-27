<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{


    public function search(Request $request)
    {
        $query = $request->input('query');

        $news['news'] = BlogPost::where('Post_Title', 'LIKE', "%$query%")
            ->orWhere('Post_Content', 'LIKE', "%$query%")
            ->paginate(10);


//        dd($news);
        return view('Frontend.newsSearch', $news);
    }

    public function index()
    {
        $blogPost = BlogPost::with(['category', 'author'])->get();
        $footer =GeneralSetting::first();
//        dd($blogPost);
        return view('Backend.blogPostList', [
            'blogPost'=> $blogPost,
            'footer'=>$footer
        ]);
    }


    public function create()
    {
        $categories = Category::all();
        $footer =GeneralSetting::first();
//        dd($category);
        return view('Backend.createBlogPost', [
            'categories'=> $categories,
            'footer'=>$footer
        ]);
    }


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


    public function show($id)
    {
        $categories = Category::all();
        $posts = BlogPost::with(['author', 'category'])->findOrFail($id);
        $trandingPost = BlogPost::where('Tranding', true)->get();
        $footer =GeneralSetting::first();

        $comments = $posts->comments()->take(5)->skip(0)->get();
        $commentCount = $posts->comments()->count();
//        dd($posts);
        return view('Frontend.detailsPost', [
            'posts'=>$posts,
            'categories'=> $categories,
            'trandingPost' => $trandingPost,
            'footer' => $footer,

            'posts' => $posts,
            'comments' => $comments,
            'commentCount' => $commentCount,
        ]);
    }


    public function edit($id)
    {
        $blogPost = BlogPost::where('id', $id)->first();
        $categories = Category::all();
        $footer =GeneralSetting::first();
        return view('Backend.updateBlogPost', [
            'blogPost'=> $blogPost,
            'categories'=> $categories,
            'footer'=>$footer
        ]);
    }


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



    public function destroy($id)
    {
        $category = BlogPost::find($id);
        $category->delete();
        return redirect()->route('Backend.blogPostList')->with('success', 'Blog Delete successfully');
    }

}
