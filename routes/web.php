<?php


use App\slider;
use App\conone;
use App\contwo;
use App\conthree;
use App\equone;
use App\equtwo;
use App\equthree;
use App\equfour;
use App\map;
use App\speone;
use App\spetwo;
use App\spethree;
use App\treone;
use App\tretwo;
use App\trethree;
use App\trefour;
use App\appointment;
use App\latest;
use App\latesttwo;
use App\latestthree;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

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

    $conone=conone::latest('created_at')->first();
    $contwo=contwo::latest('created_at')->first();
    $conthree=conthree::latest('created_at')->first();

    return view("tables.conferencetable", compact("conone","contwo","conthree"));
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
    $speone=speone::latest('created_at')->first();
    $spetwo=spetwo::latest('created_at')->first();
    $spethree=spethree::latest('created_at')->first();

    return view("tables.specialisttable", compact("speone","spetwo","spethree"));
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
    $treone=treone::latest('created_at')->first();
    $tretwo=tretwo::latest('created_at')->first();
    $trethree=trethree::latest('created_at')->first();
    $trefour=trefour::latest('created_at')->first();

    return view("tables.treatmenttable", compact("treone","tretwo","trethree","trefour"));
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
    $equone=equone::latest('created_at')->first();
    $equtwo=equtwo::latest('created_at')->first();
    $equthree=equthree::latest('created_at')->first();
    $equfour=equfour::latest('created_at')->first();

    return view("tables.equipmenttable", compact("equone","equtwo","equthree","equfour"));
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
    $map=map::latest('created_at')->first();

    return view("tables.maptable", compact("map"));
})->name('map')->middleware('auth');


Route::get('/appointment', function () {
    $appointment=appointment::latest('created_at')->first();

    return view("tables.appointmenttable", compact("appointment"));
})->name('appointment')->middleware('auth');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');









Route::get('/latest', function () {
    $latest=latest::latest('created_at')->first();
    $latesttwo=latesttwo::latest('created_at')->first();
    $latestthree=latestthree::latest('created_at')->first();

    return view("tables.latesttable", compact("latest","latesttwo","latestthree"));
})->name('latest')->middleware('auth');
Route::post('/storeonelt','latestController@storeone')->name('latest.storeone');

Route::get('/storeonelt', function () {
    $message="please fill in all the fields";
    return view("latest", compact("message"));
});


Route::post('/storetwolt','latestController@storetwo')->name('latest.storetwo');


Route::get('/storetwolt', function () {
    $message="please fill in all the fields";
    return view("latest", compact("message"));
});

Route::post('/storethreelt','latestController@storethree')->name('latest.storethree');

Route::get('/storethreelt', function () {
    $message="please fill in all the fields";
    return view("latest", compact("message"));
});

Route::get('/appointmentrd', function () {
    return view('appointment');
})->name('appointmentrd')->middleware('auth');


Route::get('/cononerd', function () {
    return view('conference.conone');
})->name('cononerd')->middleware('auth');


Route::get('/contword', function () {
    return view('conference.contwo');
})->name('contword')->middleware('auth');



Route::get('/conthreerd', function () {
    return view('conference.conthree');
})->name('conthreerd')->middleware('auth');







Route::get('/treonerd', function () {
    return view('treatments.treone');
})->name('treonerd')->middleware('auth');



Route::get('/tretword', function () {
    return view('treatments.tretwo');
})->name('tretword')->middleware('auth');



Route::get('/trethreerd', function () {
    return view('treatments.trethree');
})->name('trethreerd')->middleware('auth');


Route::get('/trefourrd', function () {
    return view('treatments.trefour');
})->name('trefourrd')->middleware('auth');



Route::get('/speonerd', function () {
    return view('specialists.speone');
})->name('speonerd')->middleware('auth');


Route::get('/spetword', function () {
    return view('specialists.spetwo');
})->name('spetword')->middleware('auth');


Route::get('/spethreerd', function () {
    return view('specialists.spethree');
})->name('spethreerd')->middleware('auth');



Route::get('/equthreerd', function () {
    return view('equipments.equthree');
})->name('equthreerd')->middleware('auth');


Route::get('/equonerd', function () {
    return view('equipments.equone');
})->name('equonerd')->middleware('auth');


Route::get('/equtword', function () {
    return view('equipments.equtwo');
})->name('equtword')->middleware('auth');


Route::get('/equfourrd', function () {
    return view('equipments.equfour');
})->name('equfourrd')->middleware('auth');


Route::get('/maprd', function () {
    return view('map');
})->name('maprd')->middleware('auth');



Route::get('/latestrd', function () {
    return view('latest.latest');
})->name('latestrd')->middleware('auth');



Route::get('/latesttword', function () {
    return view('latest.latesttwo');
})->name('latesttword')->middleware('auth');



Route::get('/latestthreerd', function () {
    return view('latest.latestthree');
})->name('latestthreerd')->middleware('auth');



Route::get('/cononeshow', function () {

    $conone=conone::latest('created_at')->first();

    return view("show.conone", compact("conone"));
   



  
})->name('cononeshow')->middleware('auth');


Route::get('/contwoshow', function () {

    $contwo=contwo::latest('created_at')->first();

    return view("show.contwo", compact("contwo"));
   



  
})->name('contwoshow')->middleware('auth');


Route::get('/conthreeshow', function () {

    $conthree=conthree::latest('created_at')->first();

    return view("show.conthree", compact("conthree"));
   



  
})->name('conthreeshow')->middleware('auth');




Route::get('/speoneshow', function () {

    $speone=speone::latest('created_at')->first();

    return view("show.speone", compact("speone"));
   



  
})->name('speoneshow')->middleware('auth');





Route::get('/spetwoshow', function () {

    $spetwo=spetwo::latest('created_at')->first();

    return view("show.spetwo", compact("spetwo"));
   



  
})->name('spetwoshow')->middleware('auth');

Route::get('/spethreeshow', function () {

    $spethree=spethree::latest('created_at')->first();

    return view("show.spethree", compact("spethree"));
   



  
})->name('spethreeshow')->middleware('auth');



Route::get('/treatmentshow', function () {

    $treone=treone::latest('created_at')->first();
    $tretwo=tretwo::latest('created_at')->first();
    $trethree=trethree::latest('created_at')->first();
    $trefour=trefour::latest('created_at')->first();

    return view("show.treatments", compact("treone","tretwo","trethree","trefour"));
   



  
})->name('treatmentshow')->middleware('auth');


Route::get('/equipmentshow', function () {

    $equone=equone::latest('created_at')->first();
    $equtwo=equtwo::latest('created_at')->first();
    $equthree=equthree::latest('created_at')->first();
    $equfour=equfour::latest('created_at')->first();

    return view("show.equipments", compact("equone","equtwo","equthree","equfour"));
   



  
})->name('equipmentshow')->middleware('auth');


Route::get('/mapshow', function () {


    $map=map::latest('created_at')->first();

    return view("show.map", compact("map"));
   



  
})->name('mapshow')->middleware('auth');


Route::get('/appointmentshow', function () {


    $appointment=appointment::latest('created_at')->first();

    return view("show.appointment", compact("appointment"));
   



  
})->name('appointmentshow')->middleware('auth');



Route::get('/latestshow', function () {

    $latest=latest::latest('created_at')->first();
    $latesttwo=latesttwo::latest('created_at')->first();
    $latestthree=latestthree::latest('created_at')->first();

    return view("show.latest", compact("latest","latesttwo","latestthree"));
   



  
})->name('latestshow')->middleware('auth');





