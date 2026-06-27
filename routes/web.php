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
// });

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// shorthand_for_grouping_with_controller
// Route::resource('jobs', JobController::class)->only(['index'])->middleware('auth');

// auth
Route::get("/register", [RegisteredUserController::class, 'create']);
Route::post("/register", [RegisteredUserController::class, 'store']);

// login
Route::get("/login", [SessionController::class, 'create'])->name('login');
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
