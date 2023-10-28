<x-auth-layout title="{{ __('Log in') }}"
               img="imgs/aweram/login.svg" img-text="{{ __('Authorization') }}">
    <h1>{{ __("Authorization") }}</h1>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="space-y-indent-half">
            <x-tt::form.status />
            <x-tt::form.validation-errors />

            <div>
                <label for="email" class="inline-block mb-2">{{ __('Email') }}</label>
                <input type="text" id="email" class="form-control" name="email"
                       placeholder="john.doe@example.com" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password" class="inline-block mb-2">{{ __('Password') }}</label>
                <input type="password" id="password" class="form-control" name="password" required>
            </div>

            <div class="form-check">
                <input type="checkbox" id="remember" class="form-check-input" value="{{ old('remember') }}">
                <label for="remember" class="form-check-label">{{ __('Remember me') }}</label>
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>

            @if (Route::has("password.request"))
                <a href="{{ route("password.request") }}" class="ml-indent-half underline text-sm text-primary hover:text-primary-hover">
                    {{ __("Forgot your password?") }}
                </a>
            @endif
        </div>
    </form>
</x-auth-layout>
