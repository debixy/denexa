<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $project = $this->projectService->createProject($request->all());

        return response()->json(['project' => $project], 201);
    }

    public function getUserProjects($userId)
    {
        $projects = $this->projectService->findProjectsByUserId($userId);

        return response()->json(['projects' => $projects]);
    }
}
