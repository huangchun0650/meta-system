<?php

namespace HuangChun\MetaSystem\App\Services\Setting;

use Symfony\Component\HttpFoundation\JsonResponse;
use HuangChun\MetaSystem\App\Http\Transforms\Models\PermissionTransform;
use HuangChun\MetaSystem\App\Repositories\Setting\PermissionRepositoryInterface;
use HuangChun\MetaSystem\App\Services\BaseService;

class PermissionService extends BaseService
{
    protected $permissionRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * selfPermissions
     */
    public function selfPermissions(): JsonResponse
    {
        $selfPermissions = $this->getAdminPermissions();

        return PermissionTransform::response(compact('selfPermissions'));
    }
}
