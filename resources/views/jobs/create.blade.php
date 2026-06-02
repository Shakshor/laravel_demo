<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    {{-- form --}}
    <form
        method="POST"
        action="/jobs"
    >
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-black">Create a new Job</h2>
                <p class="mt-1 text-sm/6 text-gray-400">This information will be displayed publicly so be careful what
                    you share.</p>


                <x-form-field>
                    <x-form-label for="title">
                        Title
                    </x-form-label>

                    <x-form-input
                        id="title"
                        type="text"
                        name="title"
                        placeholder="Sales Engineer"
                    ></x-form-input>

                    <x-form-error name="title"></x-form-error>

                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">
                        Salary
                    </x-form-label>

                    <x-form-input
                        id="salary"
                        name="salary"
                        placeholder="$50,000 USD"
                    ></x-form-input>

                    <x-form-error name="salary"></x-form-error>

                </x-form-field>
            </div>

            {{-- <div class="mt-10">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 italic">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div> --}}
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                type="button"
                class="rounded-md border border-black px-4 py-1 text-sm/6 font-semibold text-black"
            >
                Cancel
            </button>

            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
