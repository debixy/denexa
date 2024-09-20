<?php

namespace App\Services;

use App\Repositories\ServiceRepository;

class ServiceService
{
    protected $serviceRepo;

    public function __construct(ServiceRepository $serviceRepo)
    {
        $this->serviceRepo = $serviceRepo;
    }

    public function createService(array $data)
    {
        return $this->serviceRepo->create($data);
    }

    public function findServiceByName($name)
    {
        return $this->serviceRepo->findByName($name);
    }
}
