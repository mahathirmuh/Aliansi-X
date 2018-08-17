<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visi-misi.tambah-misi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mission = new Mission;
        $mission->misi = $request->misi;
        $mission->save();
        return redirect('admin/visi-misi/1');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mission = Mission::find($id);
        return view('admin.visi-misi.edit-misi', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mission = Mission::find($id);
        $mission->misi = $request->misi;
        $mission->save();
        return redirect('admin/visi-misi/1');
    }

    public function destroy($id){
      $mission = Mission::find($id);
      $mission->delete();
      return redirect('admin/visi-misi/1');
    }
}
