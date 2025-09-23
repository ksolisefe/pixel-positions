<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all()->groupBy('featured');
        
        return view('jobs.index', [
            'featuredJobs' => $jobs[0],
            'jobs' => $jobs[1],
            'tags' => Tag::all(),
        ]);
    }

    public function create()
    {

    }
    
    public function store(StoreJobRequest $request)
    {

    }

    public function show(Job $job)
    {
        
    }

    public function edit(Job $job)
    {

    }
    
    public function update(StoreJobRequest $request, Job $job)
    {

    }

    public function destroy(Job $job)
    {
        
    }
}