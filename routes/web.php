<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CellphoneController;

Route::get('/', [CellphoneController::class, 'index']);
