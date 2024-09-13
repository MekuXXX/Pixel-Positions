<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::where('title', 'LIKE', '%' . request('q') . '%')
            ->with(['employer', 'tags'])
            ->latest()
            ->paginate(10);

        return view('results', [
            'jobs' => $jobs
        ]);
    }
}
