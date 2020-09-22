<?php


Route::get('/', 'AppController@viewHomePage');





Auth::routes();

Route::get('/result',"AppController@showingResult")->name('result');

Route::get('/search',function(){
    return view('search');
});
Route::post('/search','AppController@searching');

Route::get('/login/doctor', 'Auth\LoginController@showDoctorLoginForm')->name('login.doctor');
Route::get('/register/doctor', 'Auth\RegisterController@showDoctorRegisterForm')->name('register.doctor');

Route::post('/login/doctor', 'Auth\LoginController@doctorLogin');
Route::post('/register/doctor', 'Auth\RegisterController@createDoctor')->name('register.doctor');

Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:doctor'], function () {
    Route::view('/doctor_profile', 'doctor_profile')->name('doctor.profile');

});