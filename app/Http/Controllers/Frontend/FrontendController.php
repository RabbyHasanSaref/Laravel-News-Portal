<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontendData()
    {
        $data = Category::all();
        $slider = BlogPost::with('category')->get();
        $card = BlogPost::with('category')->get();
        $breaking = BlogPost::all();

        return view('Frontend.frontend', ['data'=> $data, 'slider'=> $slider, 'card'=> $card, 'breaking'=> $breaking]);
    }


    public function categoryData($Category_Id)
    {

    }
}
