<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
      <h1 class="text-2xl text-center font-bold mt-6">Biblioteca</h1>
      <div>
        <p class="text-center mt-6">
          O que você deseja?
        </p>

        <div class="container mx-auto mt-8">
          <div class="flex flex-wrap mb-4">
            <div class="w-2/4 sm:w-1/4 mb-4 sm:h-12 flex justify-center items-center">
              <a class="bg-blue-500 w-full mx-6 text-center hover:bg-blue-700 text-white font-bold py-6 px-4 rounded" href="{{ route('users.index') }}">
                Usuários
              </a>
            </div>
            <div class="w-2/4 sm:w-1/4 mb-4 sm:h-12 flex justify-center items-center">
              <a class="bg-blue-500 w-full mx-6 text-center hover:bg-blue-700 text-white font-bold py-6 px-4 rounded" href="{{ route('genres.index') }}">
                Gêneros
              </a>
            </div>
            <div class="w-2/4 sm:w-1/4 mb-4 sm:h-12 flex justify-center items-center">
              <a class="bg-blue-500 w-full mx-6 text-center hover:bg-blue-700 text-white font-bold py-6 px-4 rounded" href="{{ route('books.index') }}">
                Livros
              </a>
            </div>
            <div class="w-2/4 sm:w-1/4 mb-4 sm:h-12 flex justify-center items-center">
              <a class="bg-blue-500 w-full mx-6 text-center hover:bg-blue-700 text-white font-bold py-6 px-4 rounded" href="{{ route('loans.index') }}">
                Empréstimos
              </a>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
