<?php

namespace App\Repositories;

use App\Models\Country;

class CountryRepository
{
    public function findByCode($code)
    {
        return Country::where('code', $code)->first();
    }

    public function create(array $data)
    {
        return Country::create($data);
    }
}
