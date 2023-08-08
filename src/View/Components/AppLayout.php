<?php

namespace PortedCheese\AweramComponents\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $cssFile;

    public function __construct()
    {
        $this->cssFile = config("aweram-components.appCssFile");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('wrmc::layouts.app');
    }
}
