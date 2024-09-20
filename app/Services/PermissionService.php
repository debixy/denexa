<?php

namespace App\Services;

use App\Repositories\PermissionRepository;

class PermissionService
{
    protected $permissionRepo;

    public function __construct(PermissionRepository $permissionRepo)
    {
        $this->permissionRepo = $permissionRepo;
    }

    public function createPermission(array $data)
    {
        return $this->permissionRepo->create($data);
    }

    public function findPermissionByName($name)
    {
        return $this->permissionRepo->findByName($name);
    }
}
