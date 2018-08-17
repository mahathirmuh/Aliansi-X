<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Vision;

class AdminHomeController extends Controller
{
    public function home(){
      $profile = Profile::all();
      $vision = Vision::all();
      return view('admin.home', compact('profile', 'vision'));
    }
}
