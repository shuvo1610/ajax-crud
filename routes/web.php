<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostAjaxController;

Route::resource('ajaxposts', PostAjaxController::class);
