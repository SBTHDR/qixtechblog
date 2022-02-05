<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div>
            <div class="space-x-4">
                <x-jet-nav-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.index')">
                    {{ __('Index') }}
                </x-jet-nav-link>

                <x-jet-nav-link href="{{ route('categories.create') }}" :active="request()->routeIs('categories.create')">
                    {{ __('Create') }}
                </x-jet-nav-link>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                  <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')

                    

                    <div>
                      <x-jet-label for="name" value="{{ __('Category Name') }}" />
                      <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$category->name" />
                      <x-jet-input-error for="name" class="mt-2" />
                    </div>

                    <x-jet-button class="mt-4">
                      {{ __('Update') }}
                    </x-jet-button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>