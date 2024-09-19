<?php

namespace HuangChun\MetaSystem\App\Http\Controllers;

use HuangChun\MetaSystem\App\Http\Requests\Auth\LoginRequest;
use HuangChun\MetaSystem\App\Services\Auth\AuthService;

class AuthController extends BaseController
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function getCaptcha()
    {
        return $this->authService->getCaptcha();
    }

    public function login(LoginRequest $request)
    {
        return $this->authService->login();
    }

    public function logout()
    {
        return $this->authService->logout();
    }

    public function refresh()
    {
        return $this->authService->refresh();
    }

    public function profile()
    {
        return $this->authService->profile();
    }

    public function menuList()
    {
        return $this->authService->menuList();
    }
}
