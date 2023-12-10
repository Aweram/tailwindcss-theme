<?php

namespace Aweram\TailwindcssTheme\Livewire;

use Livewire\Component;

class ExampleModalsWire extends Component
{
    public $dispDelete = false;

    public function render()
    {
        return view('tt::livewire.example-modals-wire');
    }

    public function showDelete()
    {
        $this->dispDelete = true;
    }

    public function closeDelete()
    {
        $this->dispDelete = false;
    }
}
