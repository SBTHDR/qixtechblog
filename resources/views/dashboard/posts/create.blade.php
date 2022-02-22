<x-app-layout>
    <x-slot name="header">
      <div class="container mx-auto">
        <div class="flex items-center justify-between">
          <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Create Post') }}
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
                  {{-- <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

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
                      <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" />
                      <x-jet-input-error for="title" class="mt-2" />
                    </div>

                    <x-jet-button class="mt-4">
                      {{ __('Create') }}
                    </x-jet-button>

                  </form> --}}

                  <x-form action="{{ route('posts.store') }}" has-files>
                    <div class="space-y-6">

                        {{-- Image --}}
                        <div>
                            <x-jet-label for="image" value="{{ __('Image') }}" />
                            <input name="image" type="file" id="image">
                            <span class="mt-2 text-xs text-gray-500">File type:jpg,png only</span>
                            <x-jet-input-error for="image" class="mt-2" />
                        </div>

                        {{-- Title --}}
                        <div>
                            <x-jet-label for="title" value="{{ __('Title') }}" />
                            <x-jet-input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" autofocus autocomplete="title" />
                            <span class="mt-2 text-xs text-gray-500">Maximum 200 characters</span>
                            <x-jet-input-error for="title" class="mt-2" />
                        </div>

                        {{-- Category --}}
                        <div>
                            <x-jet-label for="category_id" value="{{ __('Categories') }}" />
                            <select name="category_id" id="category_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                                <option value="">Please select a category</option>
                                @foreach ($categories as $category )
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="category_id" class="mt-2" />
                        </div>

                        {{-- description --}}
                        <div>
                            <x-jet-label for="description" value="{{ __('Description') }}" />
                            <x-trix name="description" styling="overflow-y-scroll h-44"></x-trix>
                            <x-jet-input-error for="description" class="mt-2" />
                        </div>

                        {{-- Schedule --}}
                        <div>
                            <x-jet-label for="published_at" value="{{ __('Schedule Date') }}" />
                            {{-- <x-pikaday name="published_at" format="YYYY-MM-DD" /> --}}
                            <input type="date" name="published_at" id="published_at">
                            <x-jet-input-error for="published_at" class="mt-2" />
                        </div>

                        {{-- Tags --}}
                        <div>
                            <x-jet-label for="tags" value="{{ __('Tags') }}" />
                            <select name="tags[]" class="w-full" id="create-post" multiple x-data="{}" x-init="function () { choices($el) }">
                                @foreach ($tags as $tag )
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Meta Description --}}
                        <div>
                            <x-jet-label for="meta_description" value="{{ __('Meta description') }}" />
                            <x-trix name="meta_description" styling="overflow-y-scroll h-30"></x-trix>
                            <x-jet-input-error for="meta_description" class="mt-2" />
                        </div>

                    </div>


                    <x-jet-button class="mt-12">
                        {{ __('Create') }}
                    </x-jet-button>

                </x-form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>