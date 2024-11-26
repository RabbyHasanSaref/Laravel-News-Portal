<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = GeneralSetting::all();
        $footer['footer'] =GeneralSetting::first();
//        dd($data);
        return view('Backend.generalSettingList', $data, $footer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footer['footer'] =GeneralSetting::first();
        return view('Backend.createGeneralSetting', $footer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'app_name'   => 'required',
            'address'    => 'required',
            'phone'      => 'required',
            'email'      => 'required',
            'develop_by' => 'required',
            'facebook'   => 'nullable',
            'linkedIn'   => 'nullable',
            'instagram'  => 'nullable',
            'youtube'    => 'nullable',
        ]);
        GeneralSetting::create($validatedData);

        return redirect()->route('generalSetting')->with('success', 'App Info added successfully!');
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
        $item['item'] = GeneralSetting::find($id);
        $footer['footer'] =GeneralSetting::first();
//        dd($data);
        return view('Backend.updateGeneralSetting', $item, $footer);
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
            'app_name'   => 'required',
            'address'    => 'required',
            'phone'      => 'required',
            'email'      => 'required',
            'develop_by' => 'required',
            'facebook'   => 'nullable',
            'linkedIn'   => 'nullable',
            'instagram'  => 'nullable',
            'youtube'    => 'nullable',
        ]);
        $item = GeneralSetting::find($id);
        $item->update($request->all());

        return redirect()->route('generalSetting')->with('success', 'App Info update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = GeneralSetting::find($id);
        $item->delete();
        return redirect()->route('generalSetting')->with('success', 'App Info delete successfully!');
    }
}
