<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div>
                  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Edit Tag') }}
                  </h2>
                </div>
                <div>
                  <a href="{{ route('tags.index') }}" class="py-2 px-4 bg-indigo-500 rounded text-lg text-white">
                    {{ __('Back') }}
                  </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                  <form action="{{ route('tags.update', $tag) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>
                      <x-jet-label for="name" value="{{ __('Tag Name') }}" />
                      <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$tag->name" />
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