<?php

namespace GIS\TailwindcssTheme\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    public string $cssFile;
    public string $jsFile;

    public function __construct()
    {
        $this->cssFile = config("tailwindcss-theme.adminCssFile");
        $this->jsFile = config("tailwindcss-theme.adminJsFile");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('tt::layouts.admin');
    }
}
