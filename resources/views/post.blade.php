<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-300 mx-auto">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            By
            <a href="/authors/{{ $post->author->username }}"
                class="hover:underline text-black">{{ $post->author->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}"
                class="hover:underline text-black">{{ $post->category->name }}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
