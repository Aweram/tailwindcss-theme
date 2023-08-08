<?php

use Illuminate\Support\Facades\Route;

if (config("aweram-components.showStylesPage")) {
    Route::get(config("aweram-components.stylePageUrl"), function () {
        return view("wrmc::styles");
    });
}
