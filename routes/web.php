<?php

use App\Models\Berita;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kurikulum', [HomeController::class, 'kurikulum'])->name('kurikulum');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi-misi');
Route::get('/ekstra', [HomeController::class, 'extra'])->name('ekstra');
Route::get('/berita', [HomeController::class, 'berita'])->name('beritas');

// Route::get('/berita', function () {
//     return view('berita', ['beritas' => Berita::all()]
// );
// });

Route::get('/berita/{id}', function ($id) {
    $berita = Berita::findOrFail($id);
    return view('.berita.show', compact('berita'));
})->name('berita.show');

Route::get('/pengumuman/{id}', function ($id) {
    $pengumuman = Pengumuman::findOrFail($id);
    return view('pengumuman.show', compact('pengumuman'));
})->name('.pengumuman.show');

// Route::get('/berita/{berita:id}', function(Berita $berita){

//     // return view('beritas', ['berita' => $berita]);
//     $berita = Berita::find($id);
//     return view('beritas', ['berita' => $post]);
// });

