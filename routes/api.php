<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

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
Route::get(
    '/pessoas/index',
    [PessoasController::class, 'index']
);

Route::post(
    '/pessoas/create',
    [PessoasController::class, 'create']
);

Route::get(
    '/pessoas/show/{id}',
    [PessoasController::class, 'show']
);

Route::post(
    '/pessoas/update/{id}',
    [PessoasController::class, 'update']
);

Route::delete(
    '/pessoas/destroy/{id}',
    [PessoasController::class, 'destroy']
);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
