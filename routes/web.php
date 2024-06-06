<?php

use App\Http\Controllers\AController;
use App\Http\Controllers\KController;
use App\Http\Controllers\MController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AmbilController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ForumKehilanganController;

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

Route::get('/h', function () {
    return view('homebefore');
});

Route::get('/header',function(){
    return view('layout.header');
});

Route::get('/layout',function(){
    return view('layout.layaouts');
});

Route::get('/kehilangan', function(){
    return view('kehilangan');
});

// Route::get('/menemukan',function(){
//     return view('menemukan');
// });
Route::get('/',[MController::class,'index'])->name('menemukan');


Route::get('/coba', function () {
    return view('coba');
    
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/pmenemukan',function(){
    return view('pmenemukan');
});

Route::get('/pkehilangan',function(){
    return view('pkehilangan');
});


Route::get('/register',[RegistrationController::class, 'index2'])->middleware('guest');
Route::post('/register',[RegistrationController::class, 'store']);


Route::get('/login', [LoginController:: class, 'index1'])->middleware('guest');
Route::post('/login', [LoginController:: class, 'authenticate']);
Route::post('/logout', [LoginController:: class, 'logout']);

Route::resource('contact', AdminController::class);
Route::resource('menemukan', MController::class);
Route::resource('kehilangan', KController::class);


Route::get("/create-laporan",[ForumKehilanganController::class, 'addlaporan'])->name('contact.fkehilangan');
Route::get("/delete-kehilangan/{id}", [ForumKehilanganController::class, 'deletekehilangan'])->name('contact.deletekehilangan');

Route::post("/create-laporan",[ForumKehilanganController::class, 'prosesaddlaporan'])->name('contact.insertfkehilangan');

Route::get("/create-menemukan",[ForumController::class, 'index'])->name('contact.fmenemukan');

Route::post("/create-menemukan",[ForumController::class, 'create'])->name('contact.insertfmenemukan');
Route::get("/edit-menemukan/{id}", [ForumController::class, 'editmenemukan'])->name('contact.editmenemukan');

Route::post("/edit-menemukan/{id}", [ForumController::class, 'proseseditmenemukan'])->name('contact.ubahmenemukan');
Route::get("/delete-menemukan/{id}", [ForumController::class, 'deletemenemukan'])->name('contact.deletemenemukan');



Route::get("/create-ambil",[AmbilController::class, 'ambil'])->name('contact.taken');

Route::post("/create-ambil",[AmbilController::class, 'prosesambil'])->name('contact.inserttaken');


Route::get('home', [ChartController::class, 'index']);