<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Services\PermissionService;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    protected $permissionService;

    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:permissions',
            'display_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $permission = $this->permissionService->createPermission($request->all());

        return response()->json(['permission' => $permission], 201);
    }
}
