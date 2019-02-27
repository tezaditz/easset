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
    return redirect('/admin');
});

Route::get('/admin/dashboard' , 'DashboardsController@index');
Route::get('/admin/qrcode/{id}', 'AdminBarang13Controller@make_qrcode')->name('gen-qrcode');
Route::get('/admin/qrcode/print/{id}', 'AdminBarang13Controller@label')->name('print-qrcode');
Route::get('/admin/gen/nourut' , 'AdminBarang13Controller@gen_no_urut_aset')->name('gen-noaset');

Route::get('/admin/encode/img/{img_path}/{img_type}' , 'AdminBarang13Controller@encode_img_base64');
Route::get('/admin/barang_upload/reset_data' , 'AdminBarangUploadController@resetdata')->name('reset-data');
Route::post('/admin/barang_upload/upload' , 'AdminBarangUploadController@import')->name('import-data');
