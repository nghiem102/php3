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

// Route::get('/', function () {
//     return view('client.index');
// });

Route::get('/', 'Client\ClientController@indexClient')->name('route_FrontEnd_Client_Index');
Route::get('/about', 'Client\ClientController@aboutClient')->name('route_FrontEnd_Client_About');
Route::get('/contact', 'Client\ClientController@contactClient')->name('route_FrontEnd_Client_Contact');
Route::match(['get','post'],'/elements','Client\ClientController@addKhachhang')->name('route_FrontEnd_Client_Elements');

Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);

Route::get('/phong', 'ControllerPhong@phong')->name('route_BackEnd_Phong_Index');
Route::match(['get','post'],'/phong/add','ControllerPhong@addPhong')->name('route_BackEnd_Phong_Add');
Route::get('/phong/detail/{id}','ControllerPhong@detail')->name('route_BackEnd_Phong_Detail');
Route::get('/phong/delete/{id}', 'ControllerPhong@delete')->name('route_BackEnd_Phong_Delete');

Route::get('/dichvu', 'ControllerDichvu@dichvu')->name('route_BackEnd_Dichvu_Index');
Route::match(['get','post'],'/dichvu/add','ControllerDichvu@addDichvu')->name('route_BackEnd_Dichvu_Add');
Route::get('/dich/delete/{id}', 'ControllerDichvu@delete')->name('route_BackEnd_Dichvu_Delete');
// Route::get('/dichvu/detail/{id}','ControllerDichvu@detail')->name('route_BackEnd_Divhvu_Detail');

Route::get('/khachhang','ControllerKhachhang@khachhang')->name('route_BackEnd_Khachhang_Index');   
Route::get('/khachhang/detail/{id}','ControllerKhachhang@detail')->name('route_BackEnd_Khachhang_Detail');
Route::get('/khachhang/delete/{id}', 'ControllerKhachhang@delete')->name('route_BackEnd_Khachhang_Delete');

Route::middleware(['auth'])->group(function(){
    Route::get('/index', 'ControllerUser@index')->name('route_BackEnd_Users_Index');
    Route::match(['get','post'],'/index/add','ControllerUser@addUser')->name('route_BackEnd_Users_Add');
    Route::get('/index/detail/{id}','ControllerUser@detail')->name('route_BackEnd_Users_Detail');    
    Route::post('/index/update/{id}','ControllerUser@update')->name('route_BackEnd_Users_Update');
    Route::match(['get','post'],'/phong/add','ControllerPhong@addPhong')->name('route_BackEnd_Phong_Add');
});