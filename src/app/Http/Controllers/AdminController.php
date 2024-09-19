<?php

namespace HuangChun\MetaSystem\App\Http\Controllers;

use HuangChun\MetaSystem\App\Models\Admin;
use HuangChun\MetaSystem\App\Services\Admin\AdminService;
use HuangChun\MetaSystem\App\Http\Requests\Admin\RegisterRequest;
use HuangChun\MetaSystem\App\Http\Requests\Admin\UpdateRequest;
use HuangChun\MetaSystem\App\Http\Requests\Admin\ListRequest;

class AdminController extends BaseController
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function list(ListRequest $request)
    {
        return $this->adminService->list();
    }

    public function detail(Admin $admin)
    {
        return $this->adminService->detail($admin);
    }

    public function store(RegisterRequest $request)
    {
        return $this->adminService->store();
    }

    public function update(Admin $admin, UpdateRequest $request)
    {
        return $this->adminService->update($admin);
    }

    public function destroy(Admin $admin)
    {
        return $this->adminService->destroy($admin);
    }
}
