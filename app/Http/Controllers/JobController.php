<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    public function index()
    {
        $featuredJobs = Job::where('featured', true)
            ->with(['employer', 'tags'])
            ->orderBy('salary', 'desc')
            ->latest()
            ->limit(6)
            ->get();

        $notFeaturedJobs = Job::latest()->with(['employer', 'tags'])->paginate(10);
        $tags = Tag::all();



        return view('jobs.index', [
            'featuredJobs' => $featuredJobs,
            'notFeaturedJobs' => $notFeaturedJobs,
            'tags' => $tags
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }
    public function store(Request $request)
    {
        $validatedFields = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url', 'max:1025'],
            'salary' => ['required', 'numeric', 'min:0'],
            'location' => ['required', 'in:On-Site,Hybrid,Remote'],
            'schedule' => ['required', 'in:Full-Time,Part-Time,Service'],
            'tags' => ['nullable']
        ]);

        $validatedFields['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($validatedFields, 'tags'));

        if ($validatedFields['tags']) {
            $tags = explode(',', $validatedFields['tags']);

            foreach ($tags as $tag) {
                $trimmedTag = trim($tag);

                if ($tag) {
                    $job->tag($trimmedTag);
                }
            }

            return redirect('/');
        }
    }
}
