<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TestimoniControllers;
use Illuminate\Support\Facades\Route;


Route::get('/',[TestimoniControllers::class,'testimonial'])->name('landingPage');
Route::get('/login',[SessionController::class,'index'])->name('login');
Route::post(
    'sesi/login',[SessionController::class,'login']
);
Route::post('/logout',[SessionController::class,'logout'])->name('logout');

Route::get('/dashboard',[SessionController::class,'create'])->name("dashboard");
Route::get('/daftarTestimoni',[TestimoniControllers::class,'index'])->name('daftarTestimoni');
 Route::get('/testimoniForm',[TestimoniControllers::class,'create'])->name('formTestimoni');
Route::post('/testimoni/post',[TestimoniControllers::class,'store'])->name('postTestimoni');
Route::get('/testimoni/update/{id}',[TestimoniControllers::class,'edit'])->name('updateTestimoni');
Route::post('/testimoni/updatePost/{id}',[TestimoniControllers::class,'update'])->name('updatePostTestimoni');
Route::get('/testimoni/delete/{id}',[TestimoniControllers::class,'destroy'])->name('deleteTestimoni');
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
