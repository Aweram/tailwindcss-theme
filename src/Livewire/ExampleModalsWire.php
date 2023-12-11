<?php

namespace Aweram\TailwindcssTheme\Livewire;

use Livewire\Component;

class ExampleModalsWire extends Component
{
    public $displayDelete = false;
    public $displayCustomDelete = false;

    public function render()
    {
        return view('tt::livewire.example-modals-wire');
    }

    public function showDelete()
    {
        $this->displayDelete = true;
    }

    public function showCustomDelete()
    {
        $this->displayCustomDelete = true;
    }

    public function closeDelete()
    {
        $this->displayDelete = false;
    }

    public function closeCustomDelete()
    {
        $this->displayCustomDelete = false;
    }

    public function confirmDelete()
    {
        $this->displayDelete = false;
    }

    public function confirmCustomDelete()
    {
        $this->displayCustomDelete = false;
    }
}
