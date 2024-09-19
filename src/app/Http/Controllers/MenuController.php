<?php

namespace HuangChun\MetaSystem\App\Http\Controllers;

use HuangChun\MetaSystem\App\Http\Requests\Menu\CreateRequest;
use HuangChun\MetaSystem\App\Http\Requests\Menu\UpdateRequest;
use HuangChun\MetaSystem\App\Models\Menu;
use HuangChun\MetaSystem\App\Services\Menu\MenuService;

class MenuController extends BaseController
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function tree()
    {
        return $this->menuService->tree();
    }

    public function store(CreateRequest $request)
    {
        return $this->menuService->store();
    }

    public function update(Menu $menu, UpdateRequest $request)
    {
        return $this->menuService->update($menu);
    }

    public function destroy(Menu $menu)
    {
        return $this->menuService->destroy($menu);
    }

    public function options()
    {
        return $this->menuService->options();
    }
}
