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

    <form action="{{route('posts.store')}}" method = "POST">
        @csrf
        <div>
            <label>
                Título
            </label>
            <br>
            <input type = "text" value = "{{old('title')}}" name = "title" id = "">
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
            <input type = "text" value = "{{old('slug')}}" name = "slug" id = "">
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

            <textarea name="body" id="" cols="30" rows="10">{{old('body')}}</textarea>

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
            Crear Post
        </button>
    </form>
</x-post-template>