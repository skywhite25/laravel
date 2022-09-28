Route::get('/forum', ForumController::class, 'index');

Route::get('/forum/create', ForumController::class, 'create');

Route::POST('/forum/{{ forum }}', ForumController::class, 'store');
