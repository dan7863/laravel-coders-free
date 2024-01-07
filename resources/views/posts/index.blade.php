<x-post-template>
    <a href = "{{route('posts.create')}}">
        Crear Post
    </a>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href = "{{route('posts.show', $post)}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    {{$posts->links()}}
</x-post-template>