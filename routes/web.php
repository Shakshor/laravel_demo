<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/jobs", function () {
    // eager_loading
    // for n+1 problem
    $jobs = Job::with("employer")->cursorPaginate(2);

    // using_lazy_loading
    // $jobs = Job::all();

    return view('jobs', [
        "jobs" => $jobs,
    ]);
});

Route::get("/jobs/create", function () {
    dd("hello from create job");
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
