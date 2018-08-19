<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


//Route for visitor to navigate
Route::get('/', 'PengunjungController@index');
Route::get('/kegiatan-desa', 'PengunjungController@kegiatan');
Route::get('/struktur-organisasi', 'PengunjungController@struktur');
Route::get('/kegiatan-desa/{id}', 'PengunjungController@artikelkegiatan');
Route::get('/potensi-desa/{id}', 'PengunjungController@artikelpotensi');
Route::get('/artikel', function(){
  $slider = \App\Slider::all();
  return view('pengunjung.artikel', compact('slider'));
});
Auth::routes();
Route::group(['middleware' => ['web', 'auth']], function(){
  //Route for Admin

  Route::get('admin', 'AdminHomeController@home');
  //Potensi Route
  Route::get('admin/potensi', 'PotentialController@index');
  Route::get('admin/potensi-tambah', 'PotentialController@create');
  Route::post('admin/potensi-simpan', 'PotentialController@store');
  Route::get('admin/potensi-hapus/{id}', 'PotentialController@destroy');
  Route::get('admin/potensi-edit/{id}', 'PotentialController@edit');
  Route::post('admin/potensi-update/{id}', 'PotentialController@update');
  Route::get('admin/potensi-lihat/{id}', 'PotentialController@show');

  //Kegiatan Desa Routes
  Route::get('admin/kegiatan-desa', 'ActivityController@index');
  Route::get('admin/kegiatan-desa-tambah', 'ActivityController@create');
  Route::post('admin/kegiatan-desa-simpan', 'ActivityController@store');
  Route::get('admin/kegiatan-desa-edit/{id}', 'ActivityController@edit');
  Route::post('admin/kegiatan-desa-update/{id}', 'ActivityController@update');
  Route::get('admin/kegiatan-desa-hapus/{id}', 'ActivityController@destroy');
  Route::get('admin/kegiatan-desa-lihat/{id}', 'ActivityController@show');

  //Struktur Organisasi Routes

  Route::get('admin/struktur-organisasi', 'StructureController@index');
  Route::get('admin/struktur-organisasi-tambah', 'StructureController@create');
  Route::post('admin/struktur-organisasi-simpan', 'StructureController@store');
  Route::get('admin/struktur-organisasi-edit/{id}', 'StructureController@edit');
  Route::post('admin/struktur-organisasi-update/{id}', 'StructureController@update');
  Route::get('admin/struktur-organisasi-hapus/{id}', 'StructureController@destroy');

  Route::get('admin/user-info-edit/{id}', 'UserController@edit');
  Route::post('admin/user-info-update/{id}', 'UserController@update');

  Route::get('admin/profil-desa-edit/{id}', 'ProfileController@edit');
  Route::post('admin/profil-desa-update/{id}', 'ProfileController@update');

  Route::get('admin/slider', 'SliderController@index');
  Route::get('admin/slider-edit/{id}', 'SliderController@edit');
  Route::post('admin/slider-update/{id}', 'SliderController@update');

  Route::get('admin/visi-misi/{id}', 'VisionController@index');
  Route::post('admin/visi-update/{id}', 'VisionController@update');

  Route::get('admin/misi-tambah', 'MissionController@create');
  Route::post('admin/misi-simpan', 'MissionController@store');
  Route::get('admin/misi-edit/{id}', 'MissionController@edit');
  Route::post('admin/misi-update/{id}', 'MissionController@update');
  Route::get('admin/misi-hapus/{id}', 'MissionController@destroy');

  Route::post('admin/peta-update/{id}', 'MapController@update');

  Route::get('admin/batas-wilayah-edit/{id}', 'BorderlineController@edit');
  Route::post('admin/batas-wilayah-update/{id}', 'BorderlineController@update');
});

//Route for Login
