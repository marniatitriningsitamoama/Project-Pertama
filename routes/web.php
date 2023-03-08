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
    return view('welcome');
});
// Route::get('/', function () {
//     return 9 * 9;
// });
// // Route::get('/about', function () {
// //     return view('whatever');
// // });
// Route::get('/contact', function () {
//     return view('contact', ['name' => 'project', 'phone' => '081236....']);
// });

// Route::redirect('/contact', '/contact-us');

// Route::get('/product', function () {
//     return 'product';
// });

// Route::get('/product/{id}', function ($id) {
//     return view('product.detail', ['id' => $id]);
// });

// Route::prefix('admin')->group(function () {

//     Route::get('/profile-admin', function () {
//         return 'profile admin';
//     });
//     Route::get('/about-admin', function () {
//         return 'about admin';
//     });
//     Route::get('/contact-admin', function () {
//         return 'contact admin';
//     });
//     Route::get('/profile-admin2', function () {
//         return 'profile admin';
//     });
//     Route::get('/about-admin2', function () {
//         return 'about admin2';
//     });
//     Route::get('/contact-admin2', function () {
//         return 'contact admin';
//     });
// });
