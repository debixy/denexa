<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    public function findByName($name)
    {
        return Role::where('name', $name)->first();
    }

    public function create(array $data)
    {
        return Role::create($data);
    }
}
