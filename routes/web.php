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
Route::get('foo', function () {
    return [ 'test' =>'Hello World'];
});

Route::get('test', function () {
    $name=request('name');
    return view('test',[
        'name' => $name
    ]);
    
});

Route::get('essai', 'EssaiController@show');
   



Route::get('/test2', function () {
    return view('welcome');
});

//Route::get('/try','EssaiController@index' );
Route::get('/try', function(){
return view('welcome');
});



Route::resource('customers','CustomerController');
Route::get('customers/{id}/edit/','CustomerController@edit');



?>