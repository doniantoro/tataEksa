<?php

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

// Route::get('/', function () {
//     return view('admin/blog');
// });
// // Route::get('admin/blog', function () {
// //     return view('admin/blog');
// // });

//Route::resource('admin', 'adminController');

Route::resource('admin/blog','adminBlogController');
Route::resource('/admin/dashboard','adminDashboardController');
