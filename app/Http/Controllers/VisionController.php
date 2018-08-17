<?php

namespace App\Http\Controllers;

use App\Vision;
use App\Mission;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $vision = Vision::find($id);
        $missions = Mission::all();
        return view('admin.visi-misi.index', compact('vision', 'missions'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vision = Vision::find($id);
        $vision->visi = $request->visi;
        $vision->save();
        return redirect('admin');
    }

}
