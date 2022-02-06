<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div>
                  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Posts') }}
                  </h2>
                </div>
                <div>
                  <a href="{{ route('posts.create') }}" class="py-2 px-4 bg-indigo-500 rounded text-lg text-white">
                    {{ __('Create') }}
                  </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="mx-auto mt-4 max-w-7xl sm:px-6 lg:px-8">
        <x-ui.alerts />
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                Datatable
            </div>
        </div>
    </div>
</x-app-layout>