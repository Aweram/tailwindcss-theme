<?php

namespace GIS\TailwindcssTheme\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class AuthLayout extends Component
{
    public string $cssFile;
    public string $jsFile;
    public string $title;
    public string $img;
    public string $imgText;
    public string|null $route;
    public string $routeText;

    public function __construct(string $route = "home", string $routeText = null, string $title = null, string $img = null, string $imgText = null)
    {
        $this->title = $title;
        $this->img = $img;
        $this->imgText = $imgText;
        $this->route = Route::has($route) ? $route : null;
        $this->routeText = $routeText ?? __("Back to home");
        $this->cssFile = config("tailwindcss-theme.authCssFile");
        $this->jsFile = config("tailwindcss-theme.authJsFile");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tt::layouts.auth');
    }
}
