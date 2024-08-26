<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite("resources/css/app.css")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/pata.png') }}" type="image/x-icon">
    <title>Formulário produtos</title>
</head>
<body>
  <header class="flex bg-zinc-200 w-full p-3 flex-1 items-center justify-center">
    <nav class="container relative h-14 flex items-center justify-between">
        <div>
            <a href="{{ url('/home') }}"><img class="max-w-14" src={{ asset('img/gatito.png') }}></a>
        </div>
        <div class="hidden border-b md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
            <ul class="flex items-center justify-around text-center gap-12 md:flex-row menu_mode">
                <li>
                <a class="font-bold" href="{{ url('/quemsomos') }}">Quem Somos</a>
                </li>
                <li>
                <a class="font-bold" href="{{ url('/contato') }}">Produtos</a>
                </li>
            </ul>
            <div class="absolute top[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
            <span class="material-symbols-outlined">close</span>
            </div>
        </div>
    </nav>
</header>


<div class="flex flex-col justify-center py-32 sm:px-6 lg:px-8 bg-gatofundo bg-cover ">

<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
  <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <div>
        <label class="block text-sm font-medium text-gray-700" for="username">
          Nome Completo
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" type="text" name="nome" id="nome" maxlength="50">
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="descricao">
          Descrição 
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" type="text" name="descricao" id="descricao" maxlength="50">
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="confirm-email">
          Peso
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" type="text" name="peso" id="peso" maxlength="14">
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="">
          Preço
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" type="text" id="preco" name="preco">
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="dob">
          Estoque
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" type="text" name="estoque" id="estoque">
        </div>
      </div>
      
      <div class="mt-6">
        <button class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-rose-900 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-700" type="submit">
         Enviar
        </button>
      </div>
    </form>
  </div>
</div>
</div>
</body>
</html>