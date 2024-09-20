<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Services\CountryService;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:countries',
        ]);

        $country = $this->countryService->createCountry($request->all());

        return response()->json(['country' => $country], 201);
    }
}
