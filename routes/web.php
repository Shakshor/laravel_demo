<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;

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
// });f

// shorthand_for_grouping_with_controller
Route::resource('jobs', JobController::class);

// auth
Route::get("/register", [RegisteredUserController::class, 'create']);
Route::post("/register", [RegisteredUserController::class, 'store']);

// login
Route::get("/login", [SessionController::class, 'create']);
Route::post("/login", [SessionController::class, 'store']);
Route::post("/logout", [SessionController::class, 'destroy']);


Route::view('/contact', 'contact');



/**
 * ------------- patch_steps -----------------
 * validate
 * authorize(on hold...)
 * update the job
 * persist the job
 * redirect to the jobs_index page
 */
