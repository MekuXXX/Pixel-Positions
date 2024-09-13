<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs()->with(['employer', 'tags'])->latest()->paginate(10);
        return view('results', ['jobs' => $jobs]);
    }
}
