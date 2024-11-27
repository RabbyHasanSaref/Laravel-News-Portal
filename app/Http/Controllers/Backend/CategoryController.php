<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category:: all();
        $footer =GeneralSetting::first();
//        dd($categories);
        return view('Backend.categoryList', [
            'categories' => $categories,
            'footer'=>$footer
        ]);
    }


    public function create()
    {

        $footer =GeneralSetting::first();

        return view('Backend.createCategory', [ 'footer'=>$footer]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
        ]);

        Category::create($request->all());

        return redirect()->route('Backend.categoryList')->with('success', 'Category added successfully!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
        $footer =GeneralSetting::first();
        return view('Backend.updateCategory', [
            'category'=> $category,
            'footer'=>$footer
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('Backend.categoryList')->with('success', 'Category Update successfully');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('Backend.categoryList')->with('success', 'Category Delete successfully');
    }
}
