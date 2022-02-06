<x-app-layout>
  <x-slot name="header">
    <div class="container mx-auto">
      <div class="flex items-center justify-between">
        <div>
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
          </h2>
        </div>
        <div>
          <a href="{{ route('posts.index') }}" class="py-2 px-4 bg-indigo-500 rounded text-lg text-white">
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
                <form action="{{ route('posts.store', $post) }}" method="POST">
                  @csrf
                  @method('PUT')

                  <div>
                    <x-jet-label for="category_id" value="{{ __('Post Category') }}" />
                    <select name="category_id" class="w-full mb-6 border-gray-300 rounded-md">
                      <option value="">Select a category</option>
                      @foreach ($categories as $category)                            
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div>
                    <x-jet-label for="title" value="{{ __('Post Title') }}" />
                    <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$post->title" />
                    <x-jet-input-error for="title" class="mt-2" />
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