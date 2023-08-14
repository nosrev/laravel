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
          <h1 class="text-2xl text-center font-bold mt-6 mb-8">Adicionar Usuário</h1>

          <div class="relative overflow-x-auto max-w-xl mx-auto">
            <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('users.store') }}">
              @csrf
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Nome
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" required>
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" required>
              </div>
              <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                  Cadastrar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
