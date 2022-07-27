<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
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

Route::resources([
    'author' => AuthorController::class,
    'gender' => GenderController::class,
    'publisher' => PublisherController::class,
    'book' => BookController::class,
]);
