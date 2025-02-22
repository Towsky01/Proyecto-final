<nav class="w-screen overflow-scroll bg-white border-b dark:bg-black border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
  <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
      <div class="relative flex items-center justify-between h-16">
          <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
              <div class="flex items-center flex-shrink-0">
                  <a href="{{ route('home') }}">
                      <svg class="w-8 h-8 text-sky-500" fill="none" width="0" stroke="currentColor"
                       viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                      <path
                          d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                      </path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                      </path>
                  </svg>
                  </a>
              </div>
              <div class="mx-auto">
                  <div class="flex space-x-4">
                      <a href="{{ route('home') }}"
                         class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('home') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                          Home
                      </a>
                      <a href="{{ route('posts.index') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('posts.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Producto
                    </a>
                    <a href="{{ route('pago') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('pago') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Pago
                    </a>
                    <a href="{{ route('nosotros') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('nosotros') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Nosotros
                    </a>
                </div>
              </div>
              @guest
              <div class="ml-auto">
                <div class="flex space-x-4">
                    <a href="{{ route('register') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        Registro
                    </a>
              </div>
            </div>
            <div class="ml-auto">
                <div class="flex space-x-4">
                    <a href="{{ route('login') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                        LogIn
                    </a>
              </div>
              @endguest
              @auth
              <form action="{{ route('logout')}}" method="POST">
                @csrf
                <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Logout</button>
              </form>
              @endauth
            </div>
              </div>
          </div>
      </div>
    </div>
</nav>