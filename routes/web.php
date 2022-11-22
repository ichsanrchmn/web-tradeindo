<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        "title" => "Beranda",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
        'active' => 'about'
    ]);
});

Route::get('/kegiatan', function () {
    return view('kegiatan', [
        "title" => "Kegiatan",
        'active' => 'kegiatan'
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
        'active' => 'kontak'
    ]);
});

Route::get('/fasilitas', function () {
    return view('fasilitas', [
        "title" => "Fasilitas",
        'active' => 'fasilitas'
    ]);
});

Route::get('/edukasi', function () {
    return view('fasilitas.edukasi', [
        "title" => "Kelas Edukasi",
        'active' => 'edukasi'
    ]);
});

Route::get('/expert-advisor', function () {
    return view('fasilitas.ea', [
        "title" => "Expert Advisor",
        'active' => 'expert-advisor'
    ]);
});

Route::get('/copytrade', function () {
    return view('fasilitas.copytrade', [
        "title" => "Copytrade",
        'active' => 'copytrade'
    ]);
});

Route::get('/pamm', function () {
    return view('fasilitas.pamm', [
        "title" => "PAMM",
        'active' => 'pamm'
    ]);
});

Route::get('/broker', function () {
    return view('fasilitas.broker', [
        "title" => "Broker",
        'active' => 'broker'
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => "Post Categories",
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Admin Dashboard"
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
