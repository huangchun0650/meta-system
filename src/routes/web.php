<?php

use Illuminate\Support\Facades\Route;
use YFDev\System\App\Http\Controllers\CustomerController;
use YFDev\System\App\Http\Controllers\MediaController;
use YFDev\System\App\Http\Controllers\ThirdPartyLogin\FBSocialiteController;

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
