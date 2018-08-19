<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borderline;

class BorderlineController extends Controller
{

    public function edit($id){
      $borderline = Borderline::find($id);
      return view('admin.batas-wilayah.edit', compact('borderline'));
    }

    public function update(Request $request, $id){
      $borderline = Borderline::find($id);
      $borderline->nama_batas = $request->nama_batas;
      $borderline->save();
      return redirect('admin');
    }
}
