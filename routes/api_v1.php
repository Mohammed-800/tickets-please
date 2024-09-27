<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    Route::apiResource('tickets', TicketController::class);

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');
});
