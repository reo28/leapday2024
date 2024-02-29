<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthAdmin\PasswordController;
use App\Http\Controllers\AuthAdmin\NewPasswordController;
use App\Http\Controllers\AuthAdmin\VerifyEmailController;
use App\Http\Controllers\AuthAdmin\RegisteredAdminController;
use App\Http\Controllers\AuthAdmin\PasswordResetLinkController;
use App\Http\Controllers\AuthAdmin\ConfirmablePasswordController;
use App\Http\Controllers\AuthAdmin\AuthenticatedSessionController;
use App\Http\Controllers\AuthAdmin\EmailVerificationPromptController;
use App\Http\Controllers\AuthAdmin\EmailVerificationNotificationController;

Route::middleware('guest:admin')->group(function () {

    Route::get('admin/register', [RegisteredAdminController::class, 'create'])
    ->name('admin.register');

    Route::post('admin/register', [RegisteredAdminController::class, 'store']);


    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
                ->name('admin.login');

    Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('admin/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('admin.password.request');

    Route::post('admin/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('admin.password.email');

    Route::get('admin/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('admin.password.reset');

    Route::post('admin/reset-password', [NewPasswordController::class, 'store'])
                ->name('admin.password.store');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/verify-email', EmailVerificationPromptController::class)
                ->name('admin.verification.notice');

    Route::get('admin/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('admin.verification.verify');

    Route::post('admin/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('admin.verification.send');

    Route::get('admin/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('admin.password.confirm');

    Route::post('admin/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('admin/password', [PasswordController::class, 'update'])->name('admin.password.update');

    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('admin.logout');
});
