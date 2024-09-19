<?php

namespace HuangChun\MetaSystem\App\Repositories\Setting;

use Spatie\Permission\Models\Permission;
use HuangChun\MetaSystem\App\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    protected $model = Permission::class;
}
