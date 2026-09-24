<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view(
        'home',
        [
            'greeting' => 'hello',
            'name' => 'Renzo'
        ]

    );
});

 Route::get('/jobs', function () {
    return view('jobs' [
    'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
  $jobs = Job::findByid($id);
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
