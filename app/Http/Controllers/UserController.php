<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    private $photos_path;

    public function __construct(){
      $this->photos_path = public_path('/images-profile-picture');
    }

    public function edit($id){
      $user = User::find($id);
      return view('admin.user-info.edit', compact('user'));
    }

    public function update($id, Request $request){
      $user = User::find($id);
      $this->validate($request, [
        'username' => 'required',
        'name' => 'required',
        'Password_Lama' => 'required',
      ]);
      if(!Hash::check($request->Password_Lama, $user->password)){
        return back()
          ->with('error', 'Password lama tidak cocok');
      }else{
        $photos = $request->file('photo');
        if(!empty($photos)){
          $gambar = $this->photos_path . '/' . $user->profile_photo;
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
            ->resize(300,400)
            ->save($this->photos_path . '/' . $new_name);
          $user->profile_photo = $new_name;
        }

        $user->username = $request->username;
        $user->name = $request->name;
        if(!empty($request->passnew)){
          $user->password = bcrypt($request->passnew);
        }

        $user->save();
        return redirect('admin');
      }
    }
}
