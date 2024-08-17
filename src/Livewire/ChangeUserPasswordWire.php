<?php

namespace Aweram\TailwindcssTheme\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\Attributes\On;

class ChangeUserPasswordWire extends Component
{
    public bool $displayData = false;

    public string $password = "";
    public string $password_confirmation = "";

    public function rules(): array
    {
        return [
            "password" => ["required", "string", Password::default(), "confirmed"],
        ];
    }

    public function render()
    {
        return view('tt::livewire.change-user-password-wire');
    }

    #[On('show-user-change-password')]
    public function showPasswordForm(): void
    {
        $this->displayData = true;
        $this->resetFields();
    }

    public function closeData(): void
    {
        $this->displayData = false;
    }

    public function update(): void
    {
        $this->validate();
        $user = Auth::user();
        /**
         * @var User $user
         */
        $user->forceFill([
            "password" => Hash::make($this->password)
        ])->save();
        $this->resetFields();
        session()->flash("password-success", __("Password has been changed"));
    }

    private function resetFields(): void
    {
        $this->reset("password", "password_confirmation");
    }
}
