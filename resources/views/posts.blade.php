<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-gray-900 text-base">
                By
                <a class="hover:underline text-gray-500"
                    href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                In
                <a class="hover:underline text-gray-500"
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                |
                {{ $post['created_at']->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 300, '...') }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
