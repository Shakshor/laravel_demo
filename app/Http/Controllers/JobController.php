<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with("employer")->latest()->cursorPaginate(3);

        return view('jobs.index', [
            "jobs" => $jobs,
        ]);
    }

    public function create()
    {
        return view("jobs.create");
    }

    public function show(Job $job)
    {
        return view('jobs.show', ["job" => $job]);
    }

    public function store()
    {
        // validation
        request()->validate([
            "title" => ["required", "min:3"],
            "salary" => ["required"],
        ]);

        $job = Job::create([
            "title" => request('title'),
            "salary" => request('salary'),
            "employer_id" => 1, // employer_id should get from authenticated login user
        ]);

        // mail
        Mail::to($job->employer->user)->send(
            new JobPosted($job),
        );

        return redirect("/jobs");
    }

    public function edit(Job $job)
    {

        // if (Auth::user()->cannot('edit-job')) {
        //     dd('failure');
        // }

        // Gate::authorize('edit-job', $job);

        return view("jobs.edit", ["job" => $job]);
    }

    public function update(Job $job)
    {
        // authorize(on hold)

        request()->validate([
            "title" => ["required", "min:3"],
            "salary" => ["required"],
        ]);


        // persist to db
        // // step-1
        // $job->title = request("title");
        // $job->salary = request("salary");
        // $job->save();

        // step-2
        $job->update([
            "title" => request("title"),
            "salary" => request("salary"),
        ]);

        return redirect("/jobs/" . $job->id);
    }

    public function destroy(Job $job)
    {
        // authorize(on hold)
        // delete the job
        $job->delete($job->id);

        // redirect
        return redirect('/jobs');
    }
}
