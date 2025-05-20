<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);          // GET /api/products
    Route::get('/{id}', [ProductController::class, 'show']);       // GET /api/products/{id}
    Route::post('/', [ProductController::class, 'store']);         // POST /api/products
    Route::put('/{id}', [ProductController::class, 'update']);     // PUT /api/products/{id}
    Route::delete('/{id}', [ProductController::class, 'destroy']); // DELETE /api/products/{id}
});