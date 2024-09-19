<?php

namespace HuangChun\MetaSystem\App\Repositories\Role;

use HuangChun\MetaSystem\App\Repositories\BaseRepositoryInterface;

interface RoleRepositoryInterface extends BaseRepositoryInterface
{
    public function getRolePermissions($role);
}
