@extends('layouts.app')
<head>
  <title>PF @yield('title')</title>
  @include('partials.navigation')

  @yield('content')
</head>
<body>
  <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Crear un nuevo producto</h1>

<form action="{{ route('posts.store')}}"method="POST">
  @csrf

  @include('posts.form-fields')

  <div class="flex items-center justify-between mt-4">
      <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('posts.index') }}">Regresar</a>

      <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Enviar</button>
  </div>
</form>

</body>
