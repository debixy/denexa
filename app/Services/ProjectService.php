<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService
{
    protected $projectRepo;

    public function __construct(ProjectRepository $projectRepo)
    {
        $this->projectRepo = $projectRepo;
    }

    public function createProject(array $data)
    {
        return $this->projectRepo->create($data);
    }

    public function findProjectsByUserId($userId)
    {
        return $this->projectRepo->findByUserId($userId);
    }
}
