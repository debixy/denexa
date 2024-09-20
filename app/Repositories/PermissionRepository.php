<?php

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository
{
    public function findByName($name)
    {
        return Permission::where('name', $name)->first();
    }

    public function create(array $data)
    {
        return Permission::create($data);
    }
}
