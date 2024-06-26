<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300 mx-auto">
            <a href="/posts/{{ $post['slug'] }}">
                <h2 class="mb-1 hover:underline text-3xl tracking-tight font-bold text-gray-900">
                    {{ $post['title'] }}
                </h2>
            </a>
            <div class="text-base text-gray-500">
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-black">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-black">{{ $post->category->name }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
