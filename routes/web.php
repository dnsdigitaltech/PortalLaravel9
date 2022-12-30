<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;

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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

//Admin All Route
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/perfil', 'Profile')->name('admin.profile');
    Route::get('/editar/perfil', 'EditProfile')->name('edit.profile');
    Route::post('/atualiza/perfil', 'StoreProfile')->name('store.profile');
    Route::get('/alterar/senha', 'ChangePassword')->name('change.password');
    Route::post('/atualiza/senha', 'UpdatePassword')->name('update.password');
});

//Home Slide All Route
Route::controller(HomeSliderController::class)->group(function(){
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/atualiza/slide', 'UpdateSlider')->name('update.slide');
});

//About Page All Route
Route::controller(AboutController::class)->group(function(){
    Route::get('/pagina/sobre', 'AboutPage')->name('about.page');
    Route::post('/atualiza/sobre', 'UpdateAbout')->name('update.about');
    Route::get('/sobre', 'HomeAbout')->name('home.about');
    Route::get('/multi/imagens', 'AboutMultiImage')->name('about.multi.image');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
