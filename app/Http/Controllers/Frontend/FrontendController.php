<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $slider = BlogPost::with('category')->take(3)->skip(0)->get();
        $card = BlogPost::with('category')->take(4)->skip(0)->get();
        $breaking = BlogPost::all();
        $featurePost = BlogPost::where('Feature', true)->get();
        $trandingPost = BlogPost::where('Tranding', true)->get();
        $latestPost = BlogPost::with(['author'])->where('Status', true)->get();
        return view('Frontend.frontend', ['categories'=> $categories,
            'slider'=> $slider,
            'card'=> $card,
            'breaking'=> $breaking,
            'featurePost' => $featurePost,
            'trandingPost' => $trandingPost,
            'latestPost' => $latestPost
        ]);
    }


    public function categoryPost($cat_id)
    {
        {
            $categories = Category::all();
            $posts = BlogPost::with('category')->where('Category_Id', $cat_id)->get();
            $trandingPost = BlogPost::where('Tranding', true)->get();

            return view('Frontend.categoryPost',[
                'categories'=>$categories,
                'posts'=>$posts,
                'trandingPost' => $trandingPost,
            ]);
        }
    }

    public function blogDetails($news_id){

        $categories = Category::all();
        $posts = BlogPost::with(['author', 'category'])->findOrFail($news_id);
        $trandingPost = BlogPost::where('Tranding', true)->get();

//        dd($posts);
        return view('Frontend.detailsPost', [
            'posts'=>$posts,
            'categories'=> $categories,
            'trandingPost' => $trandingPost,
        ]);
    }

}
