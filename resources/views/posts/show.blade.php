<x-post-template>
    <a href = "{{route('posts.edit', $post)}}">
        Editar Post
    </a>
    <h1>
        {{$post->title}}
    </h1>
    
    <div>
        {{$post->body}}
    </div>

    <form action = "{{route('posts.destroy', $post)}}" method = "POST">
        @csrf

        @method('DELETE')

        <button>
            Eliminar
        </button>
    </form>

</x-post-template>