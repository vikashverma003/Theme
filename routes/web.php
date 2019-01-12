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

/*Route::get('/', function () {
    return view('index1');
}); */




Route::get('/long', 'DestinationController@latlong');

Route::post('/lat', 'DestinationController@abc');


Route::get('/sign', 'Info@index');

Route::get('/beautiful_destination', 'Info@beau');

Route::get('/vedio', 'Info@filter');



Route::get('/profile', 'Info@profile1');

Route::post('/store1', 'Info@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/des', 'DestinationController@des');

Route::post('/store', 'DestinationController@store');



Route::get('/video', 'VideoController@index');

Route::post('/video', 'VideoController@store1');


Route::get('/tour', 'VideoController@tour');

Route::get('/tour1', 'VideoController@tour1');

Route::get('/tour2', 'VideoController@tour2');


Route::get('/tour3', 'VideoController@tour3');


Route::get('/tour4', 'VideoController@tour4');



Route::get('/image1', 'HotelImageController@index');


Route::post('/storedata', 'HotelImageController@store');


Route::get('/data', 'HotelDataController@index');



Route::post('/store2', 'HotelDataController@store2');


Route::get('/all', 'VideoController@all');

Route::get('/image/{id}', 'VideoController@image');

Route::get('/imageNew', 'ImageController@imageNew');

Route::post('/store3', 'ImageController@store3');

Route::get('/des', 'DesController@index');

Route::post('/des4', 'DesController@des4');

Route::get('/', 'ImageController@dd');

Route::get('/image_hotel', 'ImageController@image_hotel');

Route::post('/image_hotel/save', 'ImageController@save');

Route::get('/{id}', 'ImageController@des_view');

Route::get('/subdes/m', 'ImageController@subdes');

Route::post('/subdes/save1', 'ImageController@save1');

Route::get('/subhotels/m', 'ImageController@sub_hotels');

Route::post('/subhotels/save2', 'ImageController@save2');

Route::get('/subten/m', 'ImageController@sub_ten');

Route::post('/subten/m/save3', 'ImageController@save3');


Route::get('/{id}/sub', 'ImageController@ten_view');




