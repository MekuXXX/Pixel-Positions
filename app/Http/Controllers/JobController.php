<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index()
    {
        $featuredJobs = Job::where('featured', true)->limit(6)->get();
        $notFeaturedJobs = Job::where('featured', false)->paginate(10);
        $tags = Tag::all();



        return view('jobs.index', [
            'featuredJobs' => $featuredJobs,
            'notFeaturedJobs' => $notFeaturedJobs,
            'tags' => $tags
        ]);
    }
}
