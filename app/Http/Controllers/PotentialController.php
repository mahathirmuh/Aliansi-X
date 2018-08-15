<?php

namespace App\Http\Controllers;

use App\Potential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class PotentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $photos_path;

     public function __construct(){
       $this->photos_path = public_path('/images-potensi');
     }

    public function index()
    {
        $potential = Potential::latest()->get();
        return view('admin.potensi.index', compact('potential'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.potensi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = $request->file('thumbnail');
        if(!is_array($photos)){
          $photos = [$photos];
        }

        if(!is_dir($this->photos_path)){
          mkdir($this->photos_path, 0777);
        }

        for($i = 0; $i < count($photos); $i++){
          $photo = $photos[$i];
          $name = sha1(date('YmdHis') . str_random(30));
          $new_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
        }

        Image::make($photo)
          ->resize(1000, 380)
          ->save($this->photos_path . '/' . $new_name);


        $potential = new Potential;
        $potential->title = $request->title;
        $potential->description = $request->description;
        $potential->picture_title = "Gambar " . $request->title;
        $potential->thumbnail = $new_name;
        $potential->save();

        return redirect('admin/potensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $potential = Potential::find($id);
        return view('admin.potensi.show', compact('potential'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $potential = Potential::where('id', $id)->first();
        return view('admin.potensi.edit', compact('potential'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $potential = Potential::find($id);
        $photos = $request->file('thumbnail');
        if(!empty($photos)){
          $gambar = $this->photos_path . '/' . $potential->thumbnail;

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
            ->resize(1000, 380)
            ->save($this->photos_path . '/' . $new_name);
          $potential->thumbnail = $new_name;
        }

        $potential->title = $request->title;
        $potential->description = $request->description;
        $potential->picture_title = "Gambar " . $request->title;
        $potential->save();

        return redirect("admin/potensi");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Potential  $potential
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $potential = Potential::where('id', $id)->first();

      if(empty($potential)){
        return Response::json(['message' => 'Maaf file tidak ada!']);
      }

      $gambar = $this->photos_path . '/' . $potential->thumbnail;

      if(file_exists($gambar)){
        unlink($gambar);
      }

      if(!empty($potential)){
        $potential->delete();
      }

      return redirect('admin/potensi');
    }
}
