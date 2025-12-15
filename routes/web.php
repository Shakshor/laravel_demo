<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


// short
Route::view('/', 'home');


// Route::controller(JobController::class)->group(function () {
//     // index
//     Route::get('/jobs',  'index');
//     // create
//     Route::get("/jobs/create",  'create');
//     // show
//     // Route::get("/jobs/{job:slug}", function (Job $job) {  [if  the identifier parameter isn't default id, then pass the identifier this way]
//     Route::get("/jobs/{job}",  'show');
//     // store
//     Route::post("/jobs",  'store');
//     // edit
//     Route::get("/jobs/{job}/edit",  'edit');
//     // update
//     Route::patch("/jobs/{job}",  'update');
//     // delete
//     Route::delete("/jobs/{job}",  'destroy');
// });

// shorthand_for_grouping_with_controller
Route::resource('jobs', JobController::class);


Route::view('/contact', 'contact');



/**
 * ------------- patch_steps -----------------
 * validate
 * authorize(on hold...)
 * update the job
 * persist the job
 * redirect to the jobs_index page
 */
