<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;

// Route for viewing the list of items
Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue.index');

// Route for viewing the details of a single item
Route::get('/catalogue/{id}', [CatalogueController::class, 'show'])->name('catalogue.show');



// Optional: additional routes can go here if you need more functionalities
// For example, a route to view a single catalogue item in detail could look like this:
// Route::get('/catalogue/{id}', [CatalogueController::class, 'show'])->name('catalogue.show');
