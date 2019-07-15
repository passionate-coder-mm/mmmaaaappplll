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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('mmplhome','Backend\MmplhomeController');
    Route::post('clientstore','Backend\MmplhomeController@clientstore')->name('client.store');
    Route::get('clientedit','Backend\MmplhomeController@clientedit')->name('client.edit');
    Route::post('clientupdate','Backend\MmplhomeController@clientupdate')->name('client.update');
    Route::get('clientdelete','Backend\MmplhomeController@clientdelete')->name('client.delete');
    Route::post('expertisesetore','Backend\MmplhomeController@expertisestore')->name('expertise.store');
    Route::get('expertiseedit','Backend\MmplhomeController@expertiseedit')->name('expertise.edit');
    Route::post('expertiseupdate','Backend\MmplhomeController@expertiseupdate')->name('expertise.update');
    Route::get('expertisedelete','Backend\MmplhomeController@expertisedelete')->name('expertise.delete');
    Route::post('videoupdate','Backend\MmplhomeController@videoupdate')->name('video.store');
    Route::post('institutetopstore','Backend\MmplhomeController@institutetopstore')->name('institop.store');
    Route::post('instimgstore','Backend\MmplhomeController@instimgstore')->name('instituteimg.store');
    Route::get('instimgdelete','Backend\MmplhomeController@instimgdelete')->name('instimg.delete');


});

