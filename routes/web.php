<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', function () {
    return view('artists');
});

Route::get('/exhibitions', function () {
   return view('exhibitions');
});

Route::get('/events', function () {
   return view('events');
});

Route::get('/faq', function () {
    return view('faq');
});