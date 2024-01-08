<x-post-template>
    <div>
        <a href = "{{route('posts.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Crear Post <i class="fa-solid fa-plus"></i>
        </a>
    </div>
    <br>
    <hr>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Título
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $post->title }}
                    </th>
                    <td class="px-6 py-4 flex justify-evenly">
                        <a href = "{{route('posts.show', $post)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"><i class="fa-solid fa-circle-info"></i></a>
                        <a href = "{{route('posts.edit', $post)}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded cursor-pointer"><i class="fa-solid fa-pen"></i></a>
                        <form action = "{{route('posts.destroy', $post)}}" method = "POST">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{$posts->links()}}
</x-post-template>