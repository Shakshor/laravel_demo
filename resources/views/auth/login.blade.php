<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    {{-- form --}}
    <form
        method="POST"
        action="/login"
    >
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-black">Login</h2>
                <x-form-field>
                    <x-form-label for="email">
                        Email
                    </x-form-label>

                    <x-form-input
                        type="email"
                        id="email"
                        name="email"
                        :value="old('email')"
                        required
                    ></x-form-input>

                    <x-form-error name="email"></x-form-error>

                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">
                        Password
                    </x-form-label>

                    <x-form-input
                        id="password"
                        name="password"
                        type="password"
                        required
                    ></x-form-input>

                    <x-form-error name="password"></x-form-error>

                </x-form-field>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a
                href="/"
                type="button"
                class="rounded-md border border-black px-4 py-1 text-sm/6 font-semibold text-black"
            >
                Cancel
            </a>

            <x-form-button>Login</x-form-button>
        </div>
    </form>
</x-layout>
