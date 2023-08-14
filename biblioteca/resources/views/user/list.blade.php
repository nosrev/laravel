<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Usuários</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

      <div>
        <div class="container mx-auto mt-8">
          <a href="/" class="font-bold text-xl text-center block">INÍCIO</a>
          <h1 class="text-2xl text-center font-bold mt-6 mb-8">Usuários</h1>
          <div class="relative overflow-x-auto max-w-6xl mx-auto">
            <a class="bg-green-500 text-center hover:bg-green-700 text-white font-bold py-2 px-4 inline-block rounded mb-6" href="{{ route('users.create') }}">
              Adicionar
            </a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="px-1 py-3 w-64">
                          Número de Cadastro
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Nome
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Email
                      </th>
                      <th scope="col" class="px-6 py-3 w-48">
                          Ações
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <td scope="row" class="px-1 w-48 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->id }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $user->name }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $user->email }}
                      </td>
                      <td class="px-6 py-4 w-64">
                        <a class="bg-yellow-500 w-full text-center hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" href="{{ route('users.edit', ['id' => $user->id]) }}">
                          Editar
                        </a>
                        <a class="bg-red-500 w-full mx-6 text-center hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{ route('users.destroy', ['id' => $user->id]) }}">
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
