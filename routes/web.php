<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['verified', 'auth'])->group(function () {
    Route::middleware('role:admin')->prefix('admin')->as('admin.')->group(function () {
        Route::resources([
            'permissions' => PermissionController::class,
            'products' => AdminProductController::class,
            'roles' => RoleController::class,
            'users' => UserController::class
        ]);
    });
    Route::middleware('role:user')->prefix('user')->as('user.')->group(function () {
        Route::resource('products', UserProductController::class)->only(['index', 'show']);
    });
});

Route::get('/test', function () {
    $permission = Permission::find(1);
    return response()->json(auth()->user()->can('update', $permission));
});
