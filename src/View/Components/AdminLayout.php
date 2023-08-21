<?php

namespace Aweram\TailwindcssTheme\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    public $cssFile;

    public function __construct()
    {
        $this->cssFile = config("tailwindcss-theme.adminCssFile");
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
