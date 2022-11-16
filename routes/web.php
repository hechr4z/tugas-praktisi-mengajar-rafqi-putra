<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\produkController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show/{id}', function($id) {    //tanpa nilai default
    echo "Nilai parameter adalah $id.";
});

Route::get('/show/{id?}', function($id='tidak memiliki nilai') { //dengan nilai default
    echo "Nilai parameter adalah $id.";
});

Route::get('/edit/{nama}', function($nama) {
    echo "Nilai parameter adalah $nama.";
}) -> where('nama', '[A-Za-z]+');

Route::get('/index', function() {
    echo "<a href='".route('create')."'>Akses route dengan nama </a>";
});

Route::get('/create', function() {
    echo "Route diakses menggunakan nama";
}) -> name('create');

//Route::get('/produk', [produkController::class, 'index2']);

Route::get('/produk/show', [produkController::class, 'show2']);

Route::get('/halaman', function() {
    $title = 'Harry Potter';
    $konten = 'harry potter and the deathly hallows: part 2';
    return view('konten.halaman', compact('title', 'konten'));
});

Route::get('/produk', [produkController::class, 'index3']);

Route::get('/showelo', [produkController::class, 'show_eloquent']);

Route::get('/insert', [produkController::class, 'insert_eloquent']);

Route::get('/update', [produkController::class, 'update_eloquent']);

//Route::resource('produk', ProdukController::class);

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['logincheck:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function() {
        Route::resource('editor', EditorController::class);
    });
});