<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // public function index()
    // {
    //     $jobs = Job::with("employer")->latest()->cursorPaginate(3);

    //     return view('jobs.index', [
    //         "jobs" => $jobs,
    //     ]);
    // }

    // public function create()
    // {
    //     return view("jobs.create");
    // }

    // public function show(Job $job)
    // {
    //     return view('jobs.show', ["job" => $job]);
    // }

    // public function store()
    // {
    //     // validation
    //     request()->validate([
    //         "title" => ["required", "min:3"],
    //         "salary" => ["required"],
    //     ]);

    //     Job::create([
    //         "title" => request('title'),
    //         "salary" => request('salary'),
    //         "employer_id" => 1, // employer_id should get from authenticated login user
    //     ]);

    //     return redirect("/jobs");
    // }

    // public function edit(Job $job)
    // {
    //     return view("jobs.edit", ["job" => $job]);
    // }

    // public function update(Job $job)
    // {
    //     // authorize(on hold)

    //     request()->validate([
    //         "title" => ["required", "min:3"],
    //         "salary" => ["required"],
    //     ]);


    //     // persist to db
    //     // // step-1
    //     // $job->title = request("title");
    //     // $job->salary = request("salary");
    //     // $job->save();

    //     // step-2
    //     $job->update([
    //         "title" => request("title"),
    //         "salary" => request("salary"),
    //     ]);

    //     return redirect("/jobs/" . $job->id);
    // }

    // public function destroy(Job $job)
    // {
    //     // authorize(on hold)
    //     // delete the job
    //     $job->delete();

    //     // redirect
    //     return redirect('/jobs');
    // }
}
