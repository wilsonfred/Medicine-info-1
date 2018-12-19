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

//Jiwo,Ubah cara compare drug 19 des 2018
Route::get('/ViewCompareDrug', function(){

    $isShow = 'false';
    //jiwo 16 des 2018, sampai sini, Bingung sama compact(result)
    return view('newCompare',compact('isShow'));
});

//Route::get('/ReturnCompareDrug', 'MedicineInfoController@ifblade');

Route::get('/MedicineInfo','MedicineInfoController@ShowData');

Route::get('/doSearch','MedicineInfoController@searchProduct');

Route::get('/doDetail/{id}','MedicineInfoController@ShowDetail');

//pengganti doCompare
Route::get('newCompare/','MedicineInfoController@newCompareProduct');

//dua dibawah ini tidak berguna
Route::get('/doCompare/{isShow}/{isShow2}/{src2}','MedicineInfoController@compareProduct');

Route::get('/doCompare2/{isShow}/{isShow2}/{src1}','MedicineInfoController@compareProduct2');

