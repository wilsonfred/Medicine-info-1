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

//buat pertama kali load biar di hidden si result compare drugnya
Route::get('/ViewCompareDrug', function(){
    $isShow = 'false';
    $result = compact('isShow');

    //jiwo 16 des 2018, sampai sini, Bingung sama compact(result)

    //dd($result);
    return view('Compare',compact('result'));
});

Route::get('/ReturnCompareDrug', 'MedicineInfoController@ifblade');

Route::get('/MedicineInfo','MedicineInfoController@ShowData');

Route::get('/doSearch','MedicineInfoController@searchProduct');

Route::get('/doDetail/{id}','MedicineInfoController@ShowDetail');

Route::get('/doCompare','MedicineInfoController@compareProduct');

