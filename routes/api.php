<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TourController;

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

// Public Routes

Route::get('/tours', [TourController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/faqs', [FaqController::class, 'index']);
// Route::get('/users/check-username/{username}', [AuthController::class, 'checkUsername']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/email/verification-notification', [AuthController::class, 'sendVerificationEmail']);
Route::get('/verify-email/{id}/{hash}', [AuthController::class, 'verify'])->name('verification.verify');
Route::get('/search/{username}', [RateCardController::class, 'search']);
Route::get('password/reset/{token}', [AuthController::class, 'resetForm'])->name('password.reset');

// user routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/my-profile', [AuthController::class, 'show']);
    Route::put('/users', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/reservations', [ReservationController::class, 'myIndex']);
    Route::post('/reservations', [ReservationController::class, 'store']);
    Route::put('/reservations/{id}', [ReservationController::class, 'update']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// admin routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/users', [AuthController::class, 'index']);
    Route::get('/admin/my-profile', [AuthController::class, 'show']);
    Route::put('/admins', [AuthController::class, 'update']);
    Route::post('/tour', [TourController::class, 'store']);
    Route::post('/event', [EventController::class, 'store']);
    Route::put('/tour', [TourController::class, 'update']);
    Route::put('/event', [EventController::class, 'update']);
    Route::post('/admin/reservations', [ReservationController::class, 'store']);
    Route::put('/reservations/{id}', [ReservationController::class, 'update']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
