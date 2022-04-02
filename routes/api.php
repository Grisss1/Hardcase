<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/shipments/:created_date/list',[\App\Http\Controllers\Wrapper::class, 'symbols'])->name('symbols');

Route::get('/user/identitas', function(){
    return [
        'code' => '0',
        'data' => [
            'npm' => '197006040',
            'name' => 'Gristian',
            'email' => '197006040@student.unsil.ac.id'
        ]
        ];
})-> middleware('npm');