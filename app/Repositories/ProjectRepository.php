<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    public function findByUserId($userId)
    {
        return Project::where('user_id', $userId)->get();
    }

    public function create(array $data)
    {
        return Project::create($data);
    }
}
