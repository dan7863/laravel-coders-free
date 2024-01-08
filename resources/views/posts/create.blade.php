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
    <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Título
          </label>
          <input type = "text" value = "{{old('title')}}" name = "title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Título">

           @error('title')
                <span class = "text-red-600">
                    {{$message}}
                </span>
           @enderror
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Slug
          </label>
          <input type = "text" value = "{{old('slug')}}" name = "slug" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder = "Slug">

          @error('slug')
            <span class = "text-red-600">
                {{$message}}
            </span>
          @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Contenido del Post
            </label>

            <br>
            <textarea name="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="" cols="30" rows="10">{{old('body')}}</textarea>

            <br>
            @error('body')
                <span class = "text-red-600">
                    {{$message}}
                </span>
            @enderror
            <br>
        </div>
        <div class="flex items-center justify-between">
          <button type = "submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Crear Post
          </button>
        </div>
      </form>
</x-post-template>