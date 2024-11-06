<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(10);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    $employer_id = 1;
    dd(request()->all());

    Job::create([
        'employer_id' => $employer_id,
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});