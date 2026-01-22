<?php

namespace Aweram\TailwindcssTheme\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ExampleModalsWire extends Component
{
    public bool $displayDelete = false;
    public bool $displayCustomDelete = false;
    public bool $displayDialog = false;
    public bool $displayAside = false;

    public function render(): View
    {
        return view('tt::livewire.example-modals-wire');
    }

    public function showAside(): void
    {
        $this->displayAside = true;
    }

    public function showDelete(): void
    {
        $this->displayDelete = true;
    }

    public function showCustomDelete(): void
    {
        $this->displayCustomDelete = true;
    }

    public function showDialog(): void
    {
        $this->displayDialog = true;
    }

    public function closeDelete(): void
    {
        $this->displayDelete = false;
    }

    public function closeCustomDelete(): void
    {
        $this->displayCustomDelete = false;
    }

    public function confirmDelete(): void
    {
        $this->displayDelete = false;
    }

    public function confirmCustomDelete(): void
    {
        $this->displayCustomDelete = false;
    }
}
