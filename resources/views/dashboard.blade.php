<x-app-layout>
    <x-slot name="header">
        <h2 class="px-6 font-semibold text-xl text-gray-800
        dark:text-gray-200 leading-tight">
            {{ __('Vos Notes') }}
        </h2>
    </x-slot>

    @foreach($notes as $note)
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">{{ $note->title }}</h3>
                    <p>{{ $note->text }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
