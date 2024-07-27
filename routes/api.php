// routes/api.php
Route::get('/users', [UserController::class, 'index'])->middleware('auth:api');
