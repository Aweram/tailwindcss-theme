<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

if (config("tailwindcss-theme.showStylesPage")) {
    Route::group([
        'middleware' => ['web']
    ], function () {
        Route::get(config("tailwindcss-theme.stylePageUrl"), function (Request $request) {
            $layout = $request->get("layout", "app");
            return view("tt::choose-layout", [
                "layout" => $layout,
                "items" => \App\Models\User::query()->select("name", "email")->paginate(1)->appends(["layout" => $layout]),
            ]);
        })->name("styles");
    });
}
