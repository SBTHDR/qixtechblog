<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
      <a href="#" class="flex flex-wrap no-underline hover:no-underline">
        <img src="{{ Storage::url('images/' . $post->image) }}" alt="">
        <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-2">
            {!! $post->meta_description !!}
        </p>
        <div class="w-full font-bold text-xl text-gray-800 px-6">
          {{ $post->title }}
        </div>
        <p class="text-gray-800 text-base px-6 mb-5">
            {!! Str::limit(($post->description), 150, '......') !!}
        </p>
      </a>
    </div>
    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
      <div class="flex items-center justify-start">
        <a href="#" class="mx-auto lg:mx-0 gradient text-white text-sm font-bold rounded-full my-3 py-2 px-4 shadow-md focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Read More
        </a>
      </div>
    </div>
</div>