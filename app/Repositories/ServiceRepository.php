<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository
{
    public function findByName($name)
    {
        return Service::where('name', $name)->first();
    }

    public function create(array $data)
    {
        return Service::create($data);
    }
}
