<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;
use App\Profile;
use App\Slider;
use App\Vision;
use App\Mission;
use App\Map;
use App\Borderline;
use App\Activity;
use App\Potential;
use App\Contact;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        $activities = Activity::orderBy('id', 'desc')->take(8)->get();
        $structures = Structure::all();
        // $potentials = Potential::orderBy('id', 'desc')->take(7)->get();
        // return view('pengunjung.home', compact('activities','potentials'));
        $slider = Slider::all();
        $profile = Profile::all();
        $vision = Vision::all();
        $missions = Mission::all();
        $map = Map::find(1);
        $borderlines = Borderline::all();
        return view('pengunjung.home', compact('contacts','profile','slider','vision','missions', 'map', 'borderlines', 'activities', 'structures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kegiatan(){
      $sliders = Slider::all();
      $activities = Activity::latest()->paginate(10);
      $contacts = Contact::all();
      return view('pengunjung.kegiatan-desa', compact('activities', 'sliders', 'contacts'));
    }

    public function bacakegiatan($id){
      $activity = Activity::find($id);
      return view('pengunjung.baca-kegiatan-desa', compact('activity'));
    }

    public function potensi(){
      $potentials = Potential::latest()->paginate(10);
      $slider = Slider::all();
      $contacts = Contact::all();
      return view('pengunjung.potensi-desa', compact('potentials', 'slider', 'contacts'));
    }

    public function bacapotensi($id){
      $potential = Potential::find($id);
      return view('pengunjung.baca-potensi-desa', compact('potential'));
    }
}
