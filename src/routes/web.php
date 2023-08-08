<?php

use Illuminate\Support\Facades\Route;

Route::get(config("aweram-components.stylePageUrl"), function () {
    return "test";
});
