<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\addController;
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

Route::get('/',[homeController::class,'home']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[homeController::class,'redirect'])->middleware('auth','verified');
Route::get('/infos', function () {
    return view('pages.infos');
});
Route::get('/about',[aboutController::class,'about']);
Route::get('/home',[homeController::class,'home']);
Route::get('/contact',[homeController::class,'contact']);
Route::get('/blogs',[homeController::class,'blogs']);
Route::get('/menu',[menuController::class,'menu']);
Route::get('/gallary',[homeController::class,'gallary']);
Route::get('/add',[addController::class,'add']);
Route::get('/feed',[aboutController::class,'showf']);
Route::post('/save',[addController::class,'save']);
Route::get('/hot',[menuController::class,'hot']);
Route::get('/ice',[menuController::class,'ice']);
Route::post('/contact',[homeController::class,'message']);
Route::get('/edit',[menuController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[menuController::class,'create']);
Route::post('/destroy/{id}',[menuController::class,'destroy']);
Route::post('/add_cart/{id}',[menuController::class,'add_cart']);
Route::resource('Produit',menuController::class);
Route::get('/cart',[homeController::class,'cart']);
Route::get('/remove_pa/{id}',[menuController::class,'remove_cart']);
Route::get('/cash',[homeController::class,'cash']);
Route::get('/card',[homeController::class,'card']);
Route::get('/stripe/{total}',[homeController::class,'stripe']);
Route::post('stripe/{total}',[homeController::class,'stripePost'])->name('stripe.post');
Route::get('/order',[homeController::class,'getOrder']);
Route::get('/deliver/{id}',[homeController::class,'deliver']);
Route::get('/mail/{id}',[homeController::class,'mail']);
Route::post('/send_email/{id}',[homeController::class,'Smail']);
Route::get('/search',[homeController::class,'chercher']);
Route::get('/search_prd',[homeController::class,'cherche_prd']);
Route::post('/comment',[homeController::class,'comment']);
Route::post('/reply/{id}',[homeController::class,'reply']);
Route::get('/search_prd1',[homeController::class,'cherche_prd1']);
Route::get('/Users',[homeController::class,'get_user']);
Route::get('/user/{id}',[homeController::class,'user']);
Route::get('/feed/{id}',[homeController::class,'feed']);
Route::get('/com/{id}',[homeController::class,'com']);
Route::get('/rep/{id}',[homeController::class,'rep']);