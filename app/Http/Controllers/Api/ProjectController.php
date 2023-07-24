<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project\Project;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    public function index(): JsonResponse {
        $projects = Project::with('type', 'programmingLanguages', 'technologies')
            ->paginate(6);
        return response()->json($projects);
    }

    public function show(Project $project) {

    }
}
