<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Clint/formerfreelancers', function () {
    return view('Clint/formerfreelancers');
});

Route::get('/Clint/home', function () {
    return view('Clint/home');
});

Route::get('/Clint/jobsoffered', function () {
    return view('Clint/jobsoffered');
});

Route::get('/Freelancer/myjobs', function () {
    return view('Freelancer/myjobs');
});

Route::get('/Freelancer/myproposal', function () {
    return view('Freelancer/myproposal');
});

Route::get('/Freelancer/reports', function () {
    return view('Freelancer/reports');
});

Route::get('/Freelancer/searchforjobs', function () {
    return view('Freelancer/searchforjobs');
});

Route::get('/Freelancer/workingjobs', function () {
    return view('Freelancer/workingjobs');
});

Route::get('/galclint/architects', function () {
    return view('galclint/architects');
});

Route::get('/galclint/index', function () {
    return view('galclint/index');
});


Route::get('/galclint/login', function () {
    return view('galclint/login');
});


Route::get('/galclint/project', function () {
    return view('galclint/project');
});

Route::get('/galclint/singup', function () {
    return view('galclint/signup'); 
});

Route::get('/gal/addproject', function () {
    return view('gal/addproject');
});
