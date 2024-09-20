<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:services',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $service = $this->serviceService->createService($request->all());

        return response()->json(['service' => $service], 201);
    }
}
