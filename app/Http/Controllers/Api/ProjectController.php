<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with('type', 'programmingLanguages', 'technologies')->paginate(5);
        return response()->json($projects);
    }

    public function show(Project $project) {

    }
}
