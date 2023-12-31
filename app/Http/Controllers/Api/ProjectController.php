<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request): JsonResponse {
        $perPage = $request->query('per_page', 6);
        $projects = Project::with('type', 'programmingLanguages', 'technologies')
            ->orderBy('order')
            ->paginate($perPage);
        return response()->json($projects);
    }

    public function search(Request $request) {
        $searchQuery = $request->query('searchQuery');
//        $perPage = $request->query('per_page');
        $projects = Project::where('title', 'LIKE', '%' . $searchQuery . '%')
            ->with('type', 'programmingLanguages', 'technologies')
            ->orderBy('order')
            ->get();
        return response()->json($projects);
    }
}
