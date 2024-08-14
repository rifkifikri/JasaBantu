<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TestimoniControllers;
use Illuminate\Support\Facades\Route;


Route::get('/',[TestimoniControllers::class,'testimonial']);
Route::get('/login',[SessionController::class,'index'])->name('login');
Route::post(
    'sesi/login',[SessionController::class,'login']
);
Route::get('/daftarTestimoni',[TestimoniControllers::class,'index'])->name('daftarTestimoni');
Route::get('/testimoniForm',[TestimoniControllers::class,'create']);
Route::post('/testimoni/post',[TestimoniControllers::class,'store'])->name('postTestimoni');
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
