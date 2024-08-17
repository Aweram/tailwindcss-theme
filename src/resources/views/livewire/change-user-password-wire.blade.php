<x-tt::modal.aside wire:model="displayData">
    <x-slot name="title">{{ __("Change password") }}</x-slot>
    <x-slot name="content">
        <form wire:submit.prevent="update" class="space-y-indent-half" id="userPasswordForm">
            <x-tt::notifications.success prefix="password-" />

            <div>
                <label for="newPassword" class="inline-block mb-2">
                    {{ __("Password") }}<span class="text-danger">*</span>
                </label>
                <input type="password" id="newPassword"
                       class="form-control {{ $errors->has("password") ? "border-danger" : "" }}"
                       required
                       wire:loading.attr="disabled"
                       wire:model="password">
                <x-tt::form.error name="password"/>
            </div>

            <div>
                <label for="confirmPassword" class="inline-block mb-2">
                    {{ __("Confirm password") }}<span class="text-danger">*</span>
                </label>
                <input type="password" id="confirmPassword"
                       class="form-control {{ $errors->has("password_confirmation") ? "border-danger" : "" }}"
                       required
                       wire:loading.attr="disabled"
                       wire:model="password_confirmation">
                <x-tt::form.error name="password_confirmation"/>
            </div>

            <div class="flex items-center space-x-indent-half">
                <button type="button" class="btn btn-outline-dark" wire:click="closeData">
                    {{ __("Cancel") }}
                </button>
                <button type="submit" form="userPasswordForm" class="btn btn-primary"
                        wire:loading.attr="disabled">
                    {{ __("Update") }}
                </button>
            </div>
        </form>
    </x-slot>
</x-tt::modal.aside>
