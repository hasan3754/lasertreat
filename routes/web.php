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
})->name('dashboard');

Route::get('/conference', function () {
    return view('conference');
})->name('conference');

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
})->name('specialist');
Route::post('/storeonesp','specialistController@storeone')->name('specialist.storeone');

Route::get('/storeonesp', function () {
    $message="please fill in all the fields";
    return view("specialist", compact("message"));
});


Route::post('/storetwosp','specialistController@storetwo')->name('specialist.storetwo');
Route::post('/storethreesp','specialistController@storethree')->name('specialist.storethree');




Route::post('/storeonetr','treatmentController@storeone')->name('treatment.storeone');
Route::post('/storetwotr','treatmentController@storetwo')->name('treatment.storetwo');


Route::get('/treatments', function () {
    return view('treatments');
})->name('treatments');
Route::post('/storefourtr','treatmentController@storefour')->name('treatment.storefour');


Route::post('/storethreetr','treatmentController@storethreee')->name('treatment.storethreee');



Route::post('/storeoneequi','equipmentController@storeone')->name('equipment.storeone');
Route::post('/storetwoequi','equipmentController@storetwo')->name('equipment.storetwo');


Route::get('/equipments', function () {
    return view('equipments');
})->name('equipments');
Route::post('/storefourequi','equipmentController@storefour')->name('equipment.storefour');


Route::post('/storethreeequi','equipmentController@storethreee')->name('equipment.storethreee');



Route::post('/storemap','mapController@store')->name('map.store');


Route::post('/storeappointment','appointmentController@store')->name('appointment.store');






Route::get('/map', function () {
    return view('map');
})->name('map');


Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');



