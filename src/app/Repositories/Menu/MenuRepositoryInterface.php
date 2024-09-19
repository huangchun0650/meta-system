<?php

namespace HuangChun\MetaSystem\App\Repositories\Menu;

use HuangChun\MetaSystem\App\Repositories\BaseRepositoryInterface;

interface MenuRepositoryInterface extends BaseRepositoryInterface
{
    public function getMenus(array $selfPermissions);

    public function getMenusInPermissions(array $selfPermissions);

    public function getMenusWithPermissions();

    public function getMenusWithRules();

    public function getMenuRulesFromPermission($permissions);

    public function menuWithRulesAndPermissionsOptions($permissions);

    public function permissionGetMenuRoleOption($permissions);
}
