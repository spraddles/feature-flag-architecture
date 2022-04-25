<?php

use App\Http\Controllers\SomeFeatureController;

Route::prefix('v1')->group(function (): void {
    Route::get('/features', [SomeFeatureController::class, 'get']);
});

?>