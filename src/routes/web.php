<?php

use Illuminate\Support\Facades\Route;

use splittlogic\pink\Http\Controllers\pinkController;

/*
|--------------------------------------------------------------------------
| Routes must be passed through the web middleware to allow for
|   validation errors and flash messages to be displayed.
|--------------------------------------------------------------------------
*/

Route::get(
  'splittlogic/pink',
  [pinkController::class, 'index']
)->name('splittlogic.pink');
