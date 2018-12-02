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

Route::get('/', function () {
    return view('home');
});

Route::get('/Aboutus', function () {
    return view('Aboutus');
});

Route::get('/MedicineInfo', function(){
    return view('MedicineInfo');
});

Route::get('/MedicineInfo','MedicineInfoController@ShowData');

Route::get('/doSearch','MedicineInfoController@searchProduct');

Route::get('/doDetail/{id}','MedicineInfoController@ShowDetail');
