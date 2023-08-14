<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livros</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

      <div>
        <div class="container mx-auto mt-8">
          <a href="/" class="font-bold text-xl text-center block">INÍCIO</a>
          <h1 class="text-2xl text-center font-bold mt-6 mb-8">Livros</h1>
          <div class="relative overflow-x-auto max-w-6xl mx-auto">
            <a class="bg-green-500 text-center hover:bg-green-700 text-white font-bold py-2 px-4 inline-block rounded mb-6" href="{{ route('books.create') }}">
              Adicionar
            </a>

            @if(count($genres))
              <div class="float-right">
                Filtrar por gênero
                <form class="inline">
                  <select class="shadow appearance-none border rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="genre_id" required>
                    <option></option>
                    @foreach ($genres as $genre)
                      <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                    @endforeach
                  </select>
                  <button class="bg-green-500 text-center hover:bg-green-700 text-white font-bold py-2 px-4 inline-block rounded mb-6" href="{{ route('books.create') }}">
                    Filtrar
                  </button>
                </form>
              </div>
            @endif

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="px-1 py-3 w-48">
                        Número de Registro
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Gênero
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Título
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Autor
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Situação
                      </th>
                      <th scope="col" class="px-6 py-3 w-48">
                        Ações
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($books as $book)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <td scope="row" class="px-1 w-48 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $book->id }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $book->genre->title }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $book->name }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $book->author }}
                      </td>
                      <td class="px-6 py-4">
                        @if(count($book->loans))
                          @foreach ($book->loans as $loan)
                            @if($loop->last)
                              {{ $loan->status == '' || $loan->status == 'Atrasado' ? 'Emprestado' : 'Disponível' }}
                             @endif
                          @endforeach
                        @else
                          Disponível
                        @endif
                      </td>
                      <td class="px-6 py-4 w-64">
                        <a class="bg-yellow-500 w-full text-center hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" href="{{ route('books.edit', ['id' => $book->id]) }}">
                          Editar
                        </a>
                        <a class="bg-red-500 w-full mx-6 text-center hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{ route('books.destroy', ['id' => $book->id]) }}">
                          Deletar
                        </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
  </body>
</html>
