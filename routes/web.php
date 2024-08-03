<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/about', function () {
//     return 9*9;
// });

// Route::get('/contact', function () {
//     return view('contact', ['name' => 'Laravel', 'phone' => '0987654321']);
// });

// Route::redirect('/contact', '/contact-us');

// Route::get('/product', function(){
//     return 'product';
// });
// Route::get('/product/{id}', function($id){
//     return view('product.detail', ['id' => $id]);
// });

// Route::prefix('admin')->group(function(){
//     Route::get('/profil-admin', function(){
//         return 'profil admin';
//     });
//     Route::get('/about-admin', function(){
//         return 'about admin';
//     });
//     Route::get('/contact-admin', function(){
//         return 'contact admin';
//     });
// });

Route::get('/', function () {
    return view('home', [
        'name' => 'pras',
        'role' => 'staff',
        'buah' => ['apel', 'anggur', 'pisang', 'jeruk', 'mangga']
    ]);
});
Route::get('/login', 'App\Http\Controllers\AuthController@index')->name('login')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\AuthController@authenticating')->name('login')->middleware('guest');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout')->middleware('auth');

Route::get('/students', 'App\Http\Controllers\StudentController@index')->middleware('auth');
Route::get('/class', 'App\Http\Controllers\ClassController@index')->middleware('auth');


