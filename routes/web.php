<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function() {
    return "Hello ! Welcome to Laravel " . app()->version();
});