<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $categories = Category:: all();
        $categoriesCount = $categories->count();
        $blog = BlogPost::all();
        $blogCount = $blog->count();
        $footer =GeneralSetting::first();
//        dd($footer);
        return view('Backend.dashboard', [
            'user' => $user,
            'categoriesCount' => $categoriesCount,
            'blogCount'=>$blogCount,
            'footer' => $footer
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
        //
    }
}
