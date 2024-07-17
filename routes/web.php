<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/service', function(){
    return view('service');
});
Route::get('/about', function (){
    return view('about');
});
Route::get('/project', function (){
    return view('project');
});
Route::get('/testimoni', function (){
    return view('testimoni');
});
Route::get('/contact', function (){
    return view('contact');
});
