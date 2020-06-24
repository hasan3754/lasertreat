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
})->name('dashboard')->middleware('auth');

Route::get('/conference', function () {
    return view('conference');
})->name('conference')->middleware('auth');

Route::post('/store','SliderController@store')->name('slider.store');

Route::get('/delete/{id}','SliderController@delete')->name('slider.delete');


Route::get('/','SliderController@show');


Route::get('/table', function () {
    $slider = slider::all();
    return view('table', compact('slider'));
})->name('table')->middleware('auth');



Route::post('/storeone','conferenceController@storeone')->name('conference.storeone');

Route::get('/storeone', function () {
    $message="please fill in all the fields";
    return view("conference", compact("message"));
});


Route::post('/storetwo','conferenceController@storetwo')->name('conference.storetwo');

Route::get('/storetwo', function () {
    $message="please fill in all the fields";
    return view("conference", compact("message"));
});


Route::post('/storethree','conferenceController@storethree')->name('conference.storethree');


Route::get('/storethree', function () {
    $message="please fill in all the fields";
    return view("conference", compact("message"));
});




Route::get('/specialist', function () {
    return view('specialist');
})->name('specialist')->middleware('auth');
Route::post('/storeonesp','specialistController@storeone')->name('specialist.storeone');

Route::get('/storeonesp', function () {
    $message="please fill in all the fields";
    return view("specialist", compact("message"));
});


Route::post('/storetwosp','specialistController@storetwo')->name('specialist.storetwo');


Route::get('/storetwosp', function () {
    $message="please fill in all the fields";
    return view("specialist", compact("message"));
});

Route::post('/storethreesp','specialistController@storethree')->name('specialist.storethree');

Route::get('/storethreesp', function () {
    $message="please fill in all the fields";
    return view("specialist", compact("message"));
});


Route::post('/storeonetr','treatmentController@storeone')->name('treatment.storeone');

Route::get('/storeonetr', function () {
    $message="please fill in all the fields";
    return view("treatments", compact("message"));
});

Route::post('/storetwotr','treatmentController@storetwo')->name('treatment.storetwo');

Route::get('/storetwotr', function () {
    $message="please fill in all the fields";
    return view("treatments", compact("message"));
});


Route::get('/treatments', function () {
    return view('treatments');
})->name('treatments')->middleware('auth');
Route::post('/storefourtr','treatmentController@storefour')->name('treatment.storefour');


Route::get('/storefourtr', function () {
    $message="please fill in all the fields";
    return view("treatments", compact("message"));
});


Route::post('/storethreetr','treatmentController@storethreee')->name('treatment.storethreee');

Route::get('/storethreetr', function () {
    $message="please fill in all the fields";
    return view("treatments", compact("message"));
});



Route::post('/storeoneequi','equipmentController@storeone')->name('equipment.storeone');


Route::get('/storeoneequi', function () {
    $message="please fill in all the fields";
    return view("equipments", compact("message"));
});

Route::post('/storetwoequi','equipmentController@storetwo')->name('equipment.storetwo');

Route::get('/storetwoequi', function () {
    $message="please fill in all the fields";
    return view("equipments", compact("message"));
});


Route::get('/equipments', function () {
    return view('equipments');
})->name('equipments')->middleware('auth');
Route::post('/storefourequi','equipmentController@storefour')->name('equipment.storefour');


Route::get('/storefourequi', function () {
    $message="please fill in all the fields";
    return view("equipments", compact("message"));
});


Route::post('/storethreeequi','equipmentController@storethreee')->name('equipment.storethreee');


Route::get('/storethreeequi', function () {
    $message="please fill in all the fields";
    return view("equipments", compact("message"));
});



Route::post('/storemap','mapController@store')->name('map.store');

Route::get('/storemap', function () {
    $message="please fill in all the fields";
    return view("map", compact("message"));
});


Route::post('/storeappointment','appointmentController@store')->name('appointment.store');


Route::get('/storeappointment', function () {
    $message="please fill in all the fields";
    return view("appointment", compact("message"));
});






Route::get('/map', function () {
    return view('map');
})->name('map')->middleware('auth');


Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment')->middleware('auth');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
