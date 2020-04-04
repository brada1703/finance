<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $info = Http::get('https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=AMZN&interval=5min&apikey=T4ZIGG6TI0WB3QLX');
    return view('welcome', compact('info'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
