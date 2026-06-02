<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    {{-- form --}}
    <form
        method="POST"
        action="/register"
    >
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-black">Register</h2>


                <x-form-field>
                    <x-form-label for="first_name">
                        First Name
                    </x-form-label>

                    <x-form-input
                        id="first_name"
                        type="text"
                        name="first_name"
                        required
                    ></x-form-input>

                    <x-form-error name="first_name"></x-form-error>

                </x-form-field>

                <x-form-field>
                    <x-form-label for="last_name">
                        Last Name
                    </x-form-label>

                    <x-form-input
                        id="last_name"
                        type="text"
                        name="last_name"
                        required
                    ></x-form-input>

                    <x-form-error name="last_name"></x-form-error>

                </x-form-field>

                <x-form-field>
                    <x-form-label for="email">
                        Email
                    </x-form-label>

                    <x-form-input
                        type="email"
                        id="email"
                        name="email"
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

                <x-form-field>
                    <x-form-label for="password_confirmation">
                        Confirm Password
                    </x-form-label>

                    <x-form-input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        required
                    ></x-form-input>

                    <x-form-error name="password_confirmation"></x-form-error>

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

            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
