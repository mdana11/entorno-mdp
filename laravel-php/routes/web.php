<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(10);
    
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    
    $job = Arr::first(Job::all(), fn($job) => $job['id'] ==$id);

    return view('job', ['job' => $job] );
});

Route::get('/contact', function () {
    return view('contact');
});