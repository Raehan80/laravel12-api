<?php

use Illuminate\Support\Facades\Route;
// Import controller ProductController
use App\Http\Controllers\Api\ProductController;

// Products route resource (otomatis membuat rute CRUD standar)
Route::apiResource('/products', ProductController::class);