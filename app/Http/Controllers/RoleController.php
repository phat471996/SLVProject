<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IRoleService;

use Illuminate\Http\Request;

class RoleController extends BaseController
{

    protected $roleService;

    public function __construct(Request $request, IRoleService $roleService){
        $this->request = $request;
        $this->roleService = $roleService;
    }

    public function getAllRole(){
        $role = $this->roleService->roleService();
        
        if($role->success)
        {
            return $this->createOkResponse($role->result);
        }
        return $this->createErrorResponse($role->error);
    }

}