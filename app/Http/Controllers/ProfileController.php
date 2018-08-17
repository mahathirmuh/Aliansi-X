<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function edit($id){
      $profile = Profile::find($id);
      return view('admin.profile.edit', compact('profile'));
    }

    public function update($id, Request $request){
      $profile = Profile::find($id);
      $profile->profil_desa = $request->profil_desa;
      $profile->save();
      return redirect('admin');
    }

}
