<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Vision;
use App\Map;
use App\Borderline;
use App\Contact;

class AdminHomeController extends Controller
{
    public function home(){
      $profile = Profile::all();
      $vision = Vision::all();
      $map = Map::find(1);
      $borderlines = Borderline::all();
      $address = Contact::find(1);
      $phone = Contact::find(2);
      return view('admin.home', compact('phone','address','profile', 'vision', 'map', 'borderlines'));
    }
}
