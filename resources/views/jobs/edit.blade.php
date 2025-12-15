<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    {{-- form --}}
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method("PATCH")

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-black">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 px-3 
                                        border border-black 
                                        focus-within:border-indigo-500">
                                <input 
                                    id="title" 
                                    type="text" 
                                    name="title" 
                                    placeholder="Sales Engineer"
                                    value="{{ $job->title }}"
                                    class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-black 
                                            placeholder:text-gray-500 focus:outline-none sm:text-sm/6" 
                                            required/>
                            </div>

                            @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-black">Salary</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 px-3 
                                        border border-black 
                                        focus-within:border-indigo-500">
                                <input 
                                    id="salary" 
                                    type="text" 
                                    name="salary" 
                                    placeholder="$50,000 per year"
                                    value="{{ $job->salary }}"
                                    class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-black 
                                            placeholder:text-gray-500 focus:outline-none sm:text-sm/6" 
                                            required/>
                            </div>

                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
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

        <div class="mt-6 flex items-center justify-between gap-x-6">
            {{-- delete btn (indicate the hidden form for delete) --}}
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">
                    Delete
                </button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-black border border-black px-4 py-1 rounded-md">
                    Cancel
                </a>

                <div>
                    <button type="submit"
                        class="rounded-md bg-indigo-500 px-6 py-2 text-sm font-semibold text-white 
                            focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

    {{-- delete_form(hidden) --}}
    <form id="delete-form" method="POST" action="/jobs/{{ $job->id }}" class="hidden">
        @csrf
        @method("DELETE")
    </form>
</x-layout>