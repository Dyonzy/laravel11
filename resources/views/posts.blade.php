<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>

@foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-400">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-2 tracking-tight font-bold text-gray-900 text-3xl">{{ $post['title'] }}</h2>
        </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'],150) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-400 hover:underline ">Read More &raquo;</a>
    </article>
@endforeach
</x-Layout>
