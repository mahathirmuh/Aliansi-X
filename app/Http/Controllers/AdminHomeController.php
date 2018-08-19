<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Vision;
use App\Map;
use App\Borderline;

class AdminHomeController extends Controller
{
    public function home(){
      $profile = Profile::all();
      $vision = Vision::all();
      $map = Map::find(1);
      $borderlines = Borderline::all();
      return view('admin.home', compact('profile', 'vision', 'map', 'borderlines'));
    }
}
