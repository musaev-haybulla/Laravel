<?php

Route::name('admin.')->group(function() {
        Route::resources([
            'authors' => 'Authors\AuthorsController'
        ]);
});
