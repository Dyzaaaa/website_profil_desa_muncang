<?php

use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Models\Berita;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/userpermissions', [SesiController::class, 'terobos']);
    Route::get('/user/admin', [UserController::class, 'admin']);
    Route::get('/user/operator/dashboard', [AdminController::class, 'showdashboard']);
    Route::get('/logout', [SesiController::class, 'logout']);

});

// Route untuk fitur CRUD Berita
Route::resource('beritas', BeritaController::class);
Route::get('/beritas/create', [BeritaController::class, 'create'])->name('berita.create');
Route::get('/beritas/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('beritas/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::get('/beritas/{berita}', [BeritaController::class, 'show'])->name('beritas.show');

Route::delete('berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::get('/beritas', function(){
    $beritas = Berita::all();
        return view('admin.beritas.index', compact('beritas'));
})->name('beritas.index');

Route::get('/news', function(){
    $beritas = Berita::all();
        return view('news', compact('beritas'));
})->name('news');


Route::get('/home', function () {
    return redirect('/userpermissions');
});
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('/potensi', function () {
    return view('potensi');
})->name('potensi');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/struktur', function () {
    return view('struktur');
})->name('struktur');


