<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $searchString = $request->query('q', '');

        $projects = Project::with('type', 'technologies')->where('title', 'LIKE', "%${searchString}%")->paginate(8);

        return response()->json([
            'success'   => true,
            'results'   => $projects,
        ]);
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();

        return response()->json([
            'success'   => $project ? true : false,
            'results'   => $project,
        ]);
    }

    public function random()
    {
        $projects = Project::inRandomOrder()->limit(9)->get();

        return response()->json([
            'success'   => true,
            'results'   => $projects,
        ]);
    }
}