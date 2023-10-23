<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["middleware" => ["auth:sanctum"]], function () {
    Route::post("logout", [UserController::class, "logout"]);
    Route::patch("user/{id}", [UserController::class, "destroy"]);
    Route::post("code_validate", [UserController::class, "code_validate"]);
    Route::post("validate_username", [
        UserController::class,
        "validate_username",
    ]);
    Route::post("validate_mobile", [UserController::class, "validate_mobile"]);
    Route::post("validate_name", [UserController::class, "validate_name"]);
    Route::put("user/reset/{id}", [UserController::class, "reset_password"]);

    Route::put("user/old_password/{id}", [
        UserController::class,
        "old_password",
    ]);
    Route::put("user/change_password/", [
        UserController::class,
        "change_password",
    ]);
    Route::put("user/{id}", [UserController::class, "update"]);
    Route::apiResource("user", UserController::class);

    Route::post("role/validate", [RoleController::class, "validate_name"]);
    Route::patch("role/{id}", [RoleController::class, "destroy"]);
    Route::apiResource("role", RoleController::class);

    // Route::apiResource("company", CompanyController::class);
    // Route::apiResource("department", DepartmentController::class);
    // Route::apiResource("location", LocationController::class);
});
Route::post("login", [UserController::class, "login"]);
