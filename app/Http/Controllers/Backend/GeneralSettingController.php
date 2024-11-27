<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{

    public function index()
    {
        $data['data'] = GeneralSetting::all();
        $footer['footer'] =GeneralSetting::first();
//        dd($data);
        return view('Backend.generalSettingList', $data, $footer);
    }


    public function create()
    {
        $footer['footer'] =GeneralSetting::first();
        return view('Backend.createGeneralSetting', $footer);
    }


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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $item['item'] = GeneralSetting::find($id);
        $footer['footer'] =GeneralSetting::first();
//        dd($data);
        return view('Backend.updateGeneralSetting', $item, $footer);
    }


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


    public function destroy($id)
    {
        $item = GeneralSetting::find($id);
        $item->delete();
        return redirect()->route('generalSetting')->with('success', 'App Info delete successfully!');
    }
}
