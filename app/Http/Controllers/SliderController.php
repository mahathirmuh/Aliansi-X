<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    private $photos_path;

    public function __construct(){
      $this->photos_path = public_path('/img/inicover');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $slider = Slider::find($id);
      $photos = $request->file('slider_photo');

      if(!empty($photos)){
        $gambar = $this->photos_path . '/' . $slider->slider_photo;

        if(file_exists($gambar)){
          unlink($gambar);
        }

        if(!is_array($photos)){
          $photos = [$photos];
        }

        for($i = 0; $i < count($photos); $i++){
          $photo = $photos[$i];
          $name = sha1(date('YmdHis') . str_random(30));
          $new_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
        }

        Image::make($photo)
          ->resize(1000,300)
          ->save($this->photos_path . '/' . $new_name);

          $slider->slider_photo = $new_name;
          $slider->save();
      }

      return redirect('admin/slider');
    }

}
