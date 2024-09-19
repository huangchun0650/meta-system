<?php

use Illuminate\Support\Facades\Route;
use HuangChun\MetaSystem\App\Http\Controllers\CustomerController;
use HuangChun\MetaSystem\App\Http\Controllers\MediaController;
use HuangChun\MetaSystem\App\Http\Controllers\ThirdPartyLogin\FBSocialiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('system', function () {
    return 'YF System package is working!';
});
