<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.talkcharge.com%2Fstorelogo%2Fweb%2FSwiggy.png&f=1&nofb=1" alt="logo" width="240px" height="100%">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
