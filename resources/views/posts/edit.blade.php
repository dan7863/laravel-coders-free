<x-post-template>

    {{-- @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif --}}

    <form action="{{route('posts.update', $post)}}" method = "POST">
        @csrf
        @method('PUT')
        <div>
            <label>
                Título
            </label>
            <br>
            <input type = "text" value = "{{old('title', $post->title)}}" name = "title" id = "">
            <br>
            @error('title')
                <span style = "color: brown;">
                    {{$message}}
                </span>
            @enderror
            <br>
        </div>

        <div>
            <label>
                Slug
            </label>
            <br>
            <input type = "text" value = "{{old('title', $post->slug)}}" name = "slug" id = "">
            <br>
            @error('slug')
                <span style = "color: brown;">
                    {{$message}}
                </span>
            @enderror
            <br>
        </div>
        
        <br>

        <div>
            <label>
                Contenido del Post:
            </label>

            <br>

            <textarea name="body" id="" cols="30" rows="10">{{old('title', $post->body)}}</textarea>

            <br>
            @error('body')
                <span style = "color: brown;">
                    {{$message}}
                </span>
            @enderror
            <br>
        </div>

        <br>

        <button type = "submit">
            Editar Post
        </button>
    </form>
</x-post-template>