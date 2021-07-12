<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Models\Recensione;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@checkLogin');

Route::get('/signup', 'SignupController@signUp');

Route::post('/signup', 'SignupController@subscribe');

Route::get('/home', 'HomeController@home');

Route::get('/logout', 'LoginController@logout');

Route::get('/contents', 'HomeController@contents');

Route::get('/feedbacks', 'FeedbackController@allFeedbacks');

Route::get('/writefeedback', 'FeedbackController@writeFeedback');

Route::post('/writefeedback', 'FeedbackController@exportFeedback');









