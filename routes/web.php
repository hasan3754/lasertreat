<?php


use App\slider;

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




Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/conference', function () {
    return view('conference');
});

Route::post('/store','SliderController@store')->name('slider.store');

Route::get('/delete/{id}','SliderController@delete')->name('slider.delete');


Route::get('/','SliderController@show');


Route::get('/table', function () {
    $slider = slider::all();
    return view('table', compact('slider'));
})->name('table');



Route::post('/storeone','conferenceController@storeone')->name('conference.storeone');
Route::post('/storetwo','conferenceController@storetwo')->name('conference.storetwo');
Route::post('/storethree','conferenceController@storethree')->name('conference.storethree');




Route::get('/specialist', function () {
    return view('specialist');
});
Route::post('/storeonesp','specialistController@storeone')->name('specialist.storeone');
Route::post('/storetwosp','specialistController@storetwo')->name('specialist.storetwo');
Route::post('/storethreesp','specialistController@storethree')->name('specialist.storethree');