<?php

namespace App\Services;

use App\Repositories\CountryRepository;

class CountryService
{
    protected $countryRepo;

    public function __construct(CountryRepository $countryRepo)
    {
        $this->countryRepo = $countryRepo;
    }

    public function createCountry(array $data)
    {
        return $this->countryRepo->create($data);
    }

    public function findCountryByCode($code)
    {
        return $this->countryRepo->findByCode($code);
    }
}
