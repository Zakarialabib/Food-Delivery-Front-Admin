<x-app-layout>
    <div class="search-nav">
        <div class="container">
            <h3 class="mb-0">{{ __('Sign up now') }}</h3>
        </div>
    </div>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="flex flex-row mx-2">
                <!-- First Name -->
                <div class="lg:w-1/2 sm:w-full m-2">
                    <x-label for="first_name" :value="__('First Name')" />

                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                        required autofocus />
                </div>
                <!-- Last Name -->
                <div class="lg:w-1/2 sm:w-full m-2">
                    <x-label for="last_name" :value="__('Last Name')" />

                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                        required autofocus />
                </div>
            </div>
            <div class="flex flex-row">
                <!-- Email Address -->
                <div class="lg:w-1/2 sm:w-full m-2">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <!-- Mobile -->
                <div class="lg:w-1/2 sm:w-full m-2">
                    <x-label for="mobile" :value="__('Mobile')" />
                    <x-tel-input
                        id="mobile"
                        name="mobile"
                        placeholder="{{__('Ex : 017********')}}"
                        value="{{ old('mobile') }}"
                        required
                        class="rounded-md shadow-sm p-3 leading-5 bg-white dark:bg-dark-eval-2 text-zinc-700 dark:text-zinc-300 border border-zinc-300 mb-1 text-sm focus:shadow-outline-blue focus:border-blue-500 block mt-1 w-full"
                        /> 
                </div>
            </div>
            <div class="flex flex-row">
                <!-- Password -->
                <div class="lg:w-1/2 sm:w-full m-2">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="lg:w-1/2 sm:w-full m-2">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-zinc-600 hover:text-zinc-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
