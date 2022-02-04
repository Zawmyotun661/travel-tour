<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

////////customer////////////////////
Route::group(['middleware'=>['auth','customer']],function (){

});

Route::get('/customer','CustomerController@show')->name('customer.show');
Route::get('/pos/customerpackage','customershow@show');
Route::get('/pos/customerschedule/{id}','customershow@showschedule')->name('customer.schedule');

////////////booking/////////////
Route::get('/pos/booking','bookingcontroller@show')->name('booking.show');

Route::post('/pos/booking','bookingcontroller@store');

/////////Package//////////////////
Route::get('/pos/package','packagecontroller@create');
Route::post('/pos/package/store','packagecontroller@store')->name('package.store');
Route::get('pos/editpackage/{id}','packagecontroller@edit');
Route::get('/package-delete/{id}','packagecontroller@destroy');
Route::patch('/pos/updatepackage/{id}','packagecontroller@update')->name('package.update');



///schedule////
Route::get('/pos/schedule','schedulecontroller@create');
Route::post('/pos/schedule','schedulecontroller@store');
Route::get('pos/editschedule/{id}','schedulecontroller@edit');

Route::get('/schedule-delete/{id}','schedulecontroller@destroy');


////packages show///
Route::get('/pos/show','PackageDetailController@create');
Route::get('/pos/show','PackageDetailController@show');


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
// Route::post('/customer-login','Customer\LoginController@login')->name('customer.login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
