<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsLetterController;
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
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/register', [AuthController::class, 'store']);
Route::get( '/newsletter-subscriptions', [NewsLetterController::class, 'index']);
Route::post('/newsletter-subscribe', [NewsLetterController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/email/verification-notification', [AuthController::class, 'sendVerificationEmail']);
Route::get('/verify-email/{id}/{hash}', [AuthController::class, 'verify'])->name('verification.verify');
Route::get('/events/{slug}', [EventController::class, 'show']);
Route::get('/tours/{slug}', [TourController::class, 'show']);
Route::get('password/reset/{token}', [AuthController::class, 'resetForm'])->name('password.reset');

// user routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', [AuthController::class, 'show']);
    Route::put('/users', [AuthController::class, 'update']);
    Route::get('/reservations', [ReservationController::class, 'index']);
    Route::post('/book-tour/{id}', [ReservationController::class, 'storeTourBooking']);
    Route::post('/book-event/{id}', [ReservationController::class, 'storeEventBooking']);
    Route::put('/reservations/{id}', [ReservationController::class, 'update']);
    Route::get('/reservations/{id}', [ReservationController::class, 'show']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);
    Route::delete('/users/{id}', [AuthController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// admin routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/users', [AuthController::class, 'index']);
    Route::post('/faqs', [FaqController::class, 'store']);
    Route::get('/faqs/{id}', [FaqController::class, 'show']);
    Route::put('/faqs/{id}', [FaqController::class, 'update']);
    Route::delete('/faqs/{id}', [FaqController::class, 'destroy']);
    // Route::get('/admin/my-profile', [AdminController::class, 'show']);
    // Route::put('/admins', [AdminController::class, 'update']);
    Route::post('/tours', [TourController::class, 'store']);
    Route::post('/events', [EventController::class, 'store']);
    Route::put('/tours', [TourController::class, 'update']);
    Route::put('/events/{id}', [EventController::class, 'update']);
    // Route::post('/admin/reservations', [ReservationController::class, 'store']);
    Route::put('/reservations/{id}', [ReservationController::class, 'update']);
    // Route::delete('/admins', [AdminController::class, 'destroy']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);
    Route::delete('/tours/{id}', [TourController::class, 'destroy']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
