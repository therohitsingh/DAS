<?php
use App\Doctorinfos;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Input;
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

/* Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','frontend@index');

Route::get('/covid','covidcontroller@index');
Route::get('/logindetials','UserSystemInfoController@getusersysteminfo');
Route::get('/contact','frontend@contact');
Route::post('/contact/submit','frontend@submit');
Route::get('/join','frontend@join');

Route::post('/join/save/','frontend@joinsubmit');


Auth::routes();

Route::get('/dashboard', 'Dashboard@index')->name('dashboard');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');







//patient

Route::get('/dashboard/info', 'patient@index')->middleware('auth');
Route::post('/dashboard/submit','patient@formsubmit')->middleware('auth');
Route::get('/dashboard/view','patient@view')->middleware('auth');
Route::get('/dashboard/donor', 'patient@donor')->middleware('auth');
Route::post('/dashboard/donor/submitorgan','patient@submitorgan')->middleware('auth');
Route::get('/dashboard/search','patient@searchdoc')->middleware('auth');
Route::post('/dashboard/searchdoc','patient@sdoc')->middleware('auth');

Route::get('/dashboard/searchd','patient@searchdor')->middleware('auth');
Route::post('/dashboard/searchdor','patient@sdor')->middleware('auth');

Route::get('/dashboard/appointment/{id}','Appointmentcontrol@index')->middleware('auth');
Route::post('/dashboard/appointment/submit','Appointmentcontrol@formsubmit')->middleware('auth');

Route::get('/dashboard/appointmenthistory','Appointmentcontrol@view')->middleware('auth');
Route::get('/dashboard/deleteappointment/{id}','Appointmentcontrol@delete')->middleware('auth');


Route::get('/dashboard/payment/','Appointmentcontrol@payment')->middleware('auth');



Route::get('/dashboard/profile/','patient@profile')->middleware('auth');


Route::get('/dashboard/addtreatment','Treatmentcontroller@addtreat');
Route::post('/dashboard/streat','Treatmentcontroller@streat');


Route::get('/dashboard/treatment/{id}','Treatmentcontroller@treatment');
Route::post('/dashboard/treatment/submit','Treatmentcontroller@treatmentsubmit');
Route::get('/dashboard/treatmentresult','Treatmentcontroller@view');

Route::get('/dashboard/deleteappointment/{id}','Treatmentcontroller@delete')->middleware('auth');


//pdf download
Route::get('/dashboard/medicalreport/{id}','Treatmentcontroller@pdf');







//doctor
Route::get('/doctor/info', 'Doctorcontroller@info')->middleware('role:doctor');
Route::post('/doctor/submit','Doctorcontroller@formsubmit')->middleware('role:doctor');
Route::get('/doctor/search', 'Doctorcontroller@searchpat')->middleware('role:doctor');
Route::post('/doctor/searchpat','Doctorcontroller@spat')->middleware('role:doctor');

Route::get('/doctor/searchd', 'Doctorcontroller@searchdor')->middleware('role:doctor');
Route::post('/doctor/searchdor','Doctorcontroller@sdor')->middleware('role:doctor');

Route::get('/doctor/appointmenthistory', 'Appointmentcontrol@docview')->middleware('role:doctor');
Route::get('/doctor/deleteappointment/{id}', 'Appointmentcontrol@docdelete')->middleware('role:doctor');


Route::get('/doctor/totalpayment','Appointmentcontrol@totalpayment')->middleware('role:doctor');
Route::get('/doctor/profile/','Doctorcontroller@profile');


Route::get('/doctor/updatetime/{id}','Appointmentcontrol@updatetime')->middleware('role:doctor');
Route::post('/doctor/updated/','Appointmentcontrol@updatetimedetials');
Route::get('/doctor/treatmentlist/','Treatmentcontroller@docview');

Route::get('/doctor/treatment/{id}','Treatmentcontroller@doctreatment');
Route::post('/doctor/treatment/submit','Treatmentcontroller@doctreatmentsubmit');



//Super
Route::get('/doctor/patientinfos','SuperadminPower@viewpatient')->middleware('role:super');
Route::get('/doctor/doctorinfos','SuperadminPower@viewdoctor')->middleware('role:super');

Route::get('/doctor/contactinfos','SuperadminPower@contact')->middleware('role:super');
Route::get('/doctor/joininfos','SuperadminPower@joining')->middleware('role:super');

Route::get('/demo','soumya@pooja');
