<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

if (config("aweram-components.showStylesPage")) {
    Route::get(config("aweram-components.stylePageUrl"), function (Request $request) {
        $layout = $request->get("layout", "app");
        return view("wrmc::choose-layout", ["layout" => $layout]);
    });
}
