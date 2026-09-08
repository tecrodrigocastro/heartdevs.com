<?php

declare(strict_types=1);

use He4rt\Identity\Http\Controllers\MobileMeController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/mobile')
    ->middleware(['api', 'auth:sanctum'])
    ->group(static function (): void {
        Route::get('/me', MobileMeController::class)
            ->name('mobile.me');
    });
