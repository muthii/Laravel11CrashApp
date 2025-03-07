<x-layout>
   <h1 class="title">Latest Posts</h1>
    <div class="grid grid-cols-2 gap-6">
    @foreach ($posts as $post)
        <div class="mb-4 p-4 bg-white shadow rounded-lg">
            {{-- title --}}
            <h2 class="text-xl font-semibold">{{ $post->title }}</h2>

            {{-- created by and time since creation --}}
            <span>
                Posted  {{ $post->created_at->diffForHumans() }}
               by
               <a href="" class="text-blue-500 font-medium">
                {{ $post->user_id }}
               </a>
            </span>

            {{-- body --}}
            <p class="text-gray-700">{{ Str::words($post->body, 15) }}</p>

        </div>
    @endforeach
</div>
<div class="mt-8">
    {{ $posts->links() }}
</div>

</x-layout>