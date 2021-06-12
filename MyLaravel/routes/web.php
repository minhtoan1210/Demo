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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index', function () {
//     return view('page.trangchu');
// });

// Route::get('chitiet', function () {
//     return view('page.chitiet');
// });

Route::get('index', 'App\Http\Controllers\PageController@getIndex');

Route::get('chitiet/{id}', 'App\Http\Controllers\PageController@getChitiet');

Route::get('detail/{{id}}' ,'App\Http\Controllers\PageController@getDetail');

// Route::get('index',[
//     'as'=>'trang-chu',
//     'uses'=>'PageController@getIndex'
// ]);

