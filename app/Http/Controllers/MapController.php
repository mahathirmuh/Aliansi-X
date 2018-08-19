<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
use Intervention\Image\Facades\Image;

class MapController extends Controller
{
    private $photos_path;

    public function __construct(){
      $this->photos_path = public_path('/map');
    }

    public function update(Request $request, $id){
      $map = Map::find($id);

      $photos = $request->file('map');

      if(!empty($photos)){
        $gambar = $this->photos_path . '/' . $map->map;
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
          ->resize(550,550)
          ->save($this->photos_path . '/' .$new_name);

        $map->map = $new_name;
        $map->save();
      }

      return redirect('admin');
    }
}
