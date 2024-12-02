<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/profil-sejarah', function () {
    return view('profil.sejarah');
});
Route::get('/profil-visimisi', function () {
    return view('profil.visiMisi');
});
Route::get('/profil-strukturOrganisasi', function () {
    return view('profil.struktur');
});
Route::get('/profil-pengurus', function () {
    return view('profil.pengurus');
});
Route::get('/profil-artiLogo', function () {
    return view('profil.artiLogo');
});
Route::get('/profil-tujuanFungsiTugas', function () {
    return view('profil.tujuanFungsiTugas');
});


Route::get('/tupoksi-bendaharaUmum', function () {
    return view('tupoksi.bendahara');
});
Route::get('/tupoksi-kesekretariatan', function () {
    return view('tupoksi.kesekretariatan');
});

Route::get('/berita', function () {
    return view('berita.berita');
});
Route::get('/berita1', function () {
    return view('berita.detailBerita1');
});
Route::get('/berita2', function () {
    return view('berita.detailBerita2');
});
Route::get('/berita3', function () {
    return view('berita.detailBerita3');
});

Route::get('/pendaftaran', function () {
    return view('keanggotaan.pendaftaran');
});


