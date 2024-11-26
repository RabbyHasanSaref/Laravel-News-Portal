<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $footer =GeneralSetting::first();

        return view('Backend.createCategory', [ 'footer'=>$footer]);
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
            'name'=> 'required',
        ]);

        Category::create($request->all());

        return redirect()->route('Backend.categoryList')->with('success', 'Category added successfully!');
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
        $category = Category::find($id);
        $footer =GeneralSetting::first();
        return view('Backend.updateCategory', [
            'category'=> $category,
            'footer'=>$footer
        ]);
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
            'name'=>'required',
        ]);
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('Backend.categoryList')->with('success', 'Category Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('Backend.categoryList')->with('success', 'Category Delete successfully');
    }
}
