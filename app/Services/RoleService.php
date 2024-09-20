<?php

namespace App\Services;

use App\Repositories\RoleRepository;

class RoleService
{
    protected $roleRepo;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }

    public function createRole(array $data)
    {
        return $this->roleRepo->create($data);
    }

    public function findRoleByName($name)
    {
        return $this->roleRepo->findByName($name);
    }
}
