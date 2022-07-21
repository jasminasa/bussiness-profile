<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configs = Config::latest()->paginate(5);

        return view('configs.index', compact('configs'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        $config = Config::all();
        return view('configs.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        $rules = [
            'title' => 'required',
            'image' => 'file',
            'metadata' => 'required',
            'wa' => 'required',
            'footer_img' => 'file',
            'footer_content' => 'required',
        ];

        $validated = $request->validate($rules);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        if ($image = $request->file('footer_img')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        $config->update($validated);

        return redirect()->route('config.index')
            ->with('success', 'Update Success!');
    }
}