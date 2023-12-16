<?php

namespace Aweram\TailwindcssTheme\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ExampleUserPaginationWire extends Component
{
    use WithPagination;

    public function render()
    {
        return view('tt::livewire.example-user-pagination-wire', [
            'users' => User::query()->select("name", "email")->paginate(1),
        ]);
    }
}
