<x-auth-layout title="{{ __('Forgot password') }}"
               route="login" route-text="{{ __('Back to log in') }}"
               img="imgs/aweram/forgot.svg" img-text="{{ __('Forgot password') }}">
    <h1>{{ __("Forgot password") }}</h1>

    <div class="mb-indent-half text-sm text-secondary">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <form action="{{ route('password.email') }}" method="post">
        @csrf
        <div class="space-y-indent-half">
            <x-tt::form.status />
            <x-tt::form.validation-errors />

            <div>
                <label for="email" class="inline-block mb-2">{{ __('Email') }}</label>
                <input type="email" id="email" class="form-control" name="email"
                       placeholder="john.doe@example.com" value="{{ old('email') }}" required autofocus>
            </div>

            <button type="submit" class="btn btn-primary">{{ __("Send") }}</button>
        </div>
    </form>
</x-auth-layout>
