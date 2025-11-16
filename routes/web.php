<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function () {
    return view('jobs', [
        "jobs" => Job::all(),
    ]);
});

Route::get("/jobs/{id}", function ($id) {
    // // use_method_for_id
    // $job = Arr::first($jobs, function ($job) use ($id) {
    //     return $job["id"] === (int)$id;
    // });

    // without_use_method
    $job = Job::find($id);

    return view('job', ["job" => $job]);
});


Route::get("/contact", function () {
    return view('contact');
});
