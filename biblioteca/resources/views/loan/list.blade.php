<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Empréstimos</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

      <div>
        <div class="container mx-auto mt-8">
          <a href="/" class="font-bold text-xl text-center block">INÍCIO</a>
          <h1 class="text-2xl text-center font-bold mt-6 mb-8">Empréstimos</h1>
          <div class="relative overflow-x-auto max-w-8xl mx-auto">
            <a class="bg-green-500 text-center hover:bg-green-700 text-white font-bold py-2 px-4 inline-block rounded mb-6" href="{{ route('loans.create') }}">
              Adicionar
            </a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="px-1 py-3 w-48">
                        Usuário
                      </th>
                      <th scope="col" class="px-1 py-3 w-48">
                        Livro
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Data de Devolução
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
                @foreach ($loans as $loan)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <td class="px-1 py-4">
                        {{ $loan->user->name }}
                      </td>
                      <td class="px-1 py-4">
                        {{ $loan->book->name }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $loan->return_date }}
                      </td>
                      <td class="px-6 py-4">
                        <span class="px-3 py-1  @if ($loan->status == 'Devolvido') bg-blue-600 text-white @endif @if ($loan->status == 'Atrasado') bg-red-700 text-white @endif">{{ $loan->status }}</span>
                      </td>
                      <td class="pl-6 py-4">
                        <a class="bg-yellow-500 w-full text-center hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" href="{{ route('loans.edit', ['id' => $loan->id]) }}">
                          Editar
                        </a>
                        <a class="bg-red-500 w-full mx-2 text-center hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{ route('loans.destroy', ['id' => $loan->id]) }}">
                          Deletar
                        </a>
                        <form class="inline" method="POST" action="{{ route('loans.update', ['id' => $loan->id]) }}">
                          @csrf
                          <input name="status" type="hidden" value="1">
                          <button type="submit" class="bg-blue-600 mr-2 text-center hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                            Marcar como devolvido
                          </button>
                        </form>
                        <form class="inline" method="POST" action="{{ route('loans.update', ['id' => $loan->id]) }}">
                          @csrf
                          <input name="status" type="hidden" value="2">
                          <button type="submit" class="bg-red-700 mr-2 text-center hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                            Marcar como atrasado
                          </button>
                        </form>
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
