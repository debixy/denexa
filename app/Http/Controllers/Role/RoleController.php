<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:roles',
            'display_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $role = $this->roleService->createRole($request->all());

        return response()->json(['role' => $role], 201);
    }
}
