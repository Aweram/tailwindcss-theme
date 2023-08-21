<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

if (config("tailwindcss-theme.showStylesPage")) {
    Route::get(config("tailwindcss-theme.stylePageUrl"), function (Request $request) {
        $layout = $request->get("layout", "app");
        return view("tt::choose-layout", ["layout" => $layout]);
    });
}
