<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request): JsonResponse {
        $perPage = $request->query('per_page', 8);

        $projects = Project::with('type', 'programmingLanguages', 'technologies')
            ->paginate($perPage);
        return response()->json($projects);
    }

    public function show(Project $project) {

    }
}
