<?php

use Illuminate\Support\Facades\Route;

use splittlogic\fw\Http\Controllers\fwController;

/*
|--------------------------------------------------------------------------
| Routes must be passed through the web middleware to allow for
|   validation errors and flash messages to be displayed.
|--------------------------------------------------------------------------
*/

// Check for multiple instances
if (str_contains(url()->current(), '/public'))
{

  $urlSegments = explode('/', url()->current());
  $key = array_search('public', $urlSegments);
  
  if (is_numeric($key))
  {
    // Fix Livewire Update Route
    Livewire::setUpdateRoute(function ($handle) {
      $urlSegments = explode('/', url()->current());
      $key = array_search('public', $urlSegments);
      $route = null;
      $key--;
      while ($key > 2)
      {
        $route = '/' . $urlSegments[$key] . $route;
        $key--;
      }
      return Route::get($route . '/public/livewire/update', $handle);
    });

    // Fix Livewire Script Route
    Livewire::setScriptRoute(function ($handle) {
      $urlSegments = explode('/', url()->current());
      $key = array_search('public', $urlSegments);
      $route = null;
      $key--;
      while ($key > 2)
      {
        $route = '/' . $urlSegments[$key] . $route;
        $key--;
      }
      return Route::get($route . '/public/livewire/livewire.js', $handle);
    });
  }

}

Route::get(
  'splittlogic/fw',
  [fwController::class, 'index']
)->name('splittlogic.fw');
