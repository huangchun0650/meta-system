<?php

namespace HuangChun\MetaSystem\App\Repositories\Role;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use HuangChun\MetaSystem\App\Repositories\BaseRepository;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    protected $model = Role::class;

    public function getRolePermissions($role)
    {
        try {
            if ($role->name === config('permission.super_admin')) {
                return Permission::all();
            }

            return $role->permissions;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
