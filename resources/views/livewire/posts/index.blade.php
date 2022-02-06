<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                {{-- Main Heading --}}
                <div class="flex w-full p-3 space-x-2">

                    {{-- Search Box --}}
                    <div class="w-3/6">
                        <span class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <input wire:model.debounce.300ms='search' type="text" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100" placeholder="Search Post...">
                    </div>

                    {{-- Order By --}}
                    <div class="relative w-1/6">
                        <select wire:model='orderBy' id="" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100">
                            <option value="id">ID</option>
                            <option value="title">Title</option>
                            <option value="created_at">Created At</option>
                        </select>
                    </div>

                    {{-- Order Asc --}}
                    <div class="relative w-1/6">
                        <select wire:model='orderAsc' id="" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100">
                            <option value="1">Asc</option>
                            <option value="0">Desc</option>
                        </select>
                    </div>

                    {{-- Per Page--}}
                    <div class="relative w-1/6">
                        <select wire:model='perPage' id="" class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>

                </div>
                
              <!-- This Table requires Tailwind CSS v2.0+ -->
                {{-- <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated At</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Manage</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($categories as $category)                                
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">                                    
                                            <div class="text-sm font-medium text-gray-900">{{ $category->id }}</div>
                                        </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $category->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $category->created_at->format('m/d/y') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $category->updated_at->format('m/d/y') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex gap-2">
                                                <a href="{{ route('categories.edit', $category) }}" class="text-indigo-600 hover:text-indigo-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>

                                                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-400 hover:text-red-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            <!-- More people... -->
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div> --}}

                {{-- Table --}}
                <table class="w-full divide-y divide-gray-200">

                    <thead class="font-bold text-gray-500 bg-indigo-200">
                        <tr>
                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Id
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Title
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Category
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Featured
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Created Date
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Updated Date
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
                        @foreach ($posts as $post)

                        <tr>
                            <td class="px-2 py-4 whitespace-nowrap">
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap">
                                {{ $post->id }}
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap">
                                {{ Str::limit($post->title, 40, '...')}}
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap">
                                {{ $post->category->name }}
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap">
                                {{-- <livewire:buttons.featured :post="$post" :name="'featured'" :key="'featured'.$post->id" /> --}}
                                    Featured
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap">
                                {{$post->created_at->format('m/d/y') }}
                            </td>

                            <td class="px-2 py-4 whitespace-nowrap">
                                {{$post->updated_at->format('m/d/y') }}
                            </td>

                            <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">

                                <div class="flex justify-start space-x-1">


                                    <a href="{{ route('posts.edit', $post) }}" class="p-1 border-2 border-indigo-200 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>

                                    {{-- <livewire:buttons.delete :post="$post" :key="$post->id" /> --}}

                                </div>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="p-2 bg-indigo-300">
                    {{ $posts->links() }}
                </div>

            </div>
        </div>
    </div>
</div>

