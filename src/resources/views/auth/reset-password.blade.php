<x-auth-layout title="{{ __('Reset password') }}"
               route="login" route-text="{{ __('Back to log in') }}"
               img="imgs/aweram/reset.svg" img-text="{{ __('Reset password') }}">
    <h1>{{ __("Reset password") }}</h1>

    <form action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="space-y-indent-half">
            <x-tt::form.status />
            <x-tt::form.validation-errors />

            <div>
                <label for="email" class="inline-block mb-2">{{ __("Email") }}</label>
                <input type="email" id="email" class="form-control" name="email"
                       placeholder="john.doe@example.com" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password" class="inline-block mb-2">{{ __("Password") }}</label>
                <input type="password" id="password" class="form-control" name="password"
                       autocomplete="new-password" required>
            </div>

            <div>
                <label for="password_confirmation" class="inline-block mb-2">{{ __("Confirm password") }}</label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                       autocomplete="new-password" required>
            </div>

            <button type="submit" class="btn btn-primary">{{ _("Reset password") }}</button>
        </div>
    </form>
</x-auth-layout>
