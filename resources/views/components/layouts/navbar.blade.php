<header class="bg-indigo-900 text-white">

  <nav class="flex items-center justify-between gap-4 px-4 h-16">

    <a href="/" class="text-2xl whitespace-nowrap flex ">

      <x-carbon-money class="w-8 text-yellow-400"/>



      <span class="px-2 font-extrabold">{{ env('APP_CODE') }}</span>
    </a>

    <div id="menu" class="absolute left-0 top-16 max-md:bg-gray-200 w-full flex flex-col gap-6 p-4 md:static md:flex-row md:justify-between items-center ">

        <ul class="flex flex-col text-black md:flex-row px-2 w-full z-50">

            @if(Auth::check())
            {{-- DOCUMENTS --}}
            <x-nav-link href="/records" type="menu_link">Records</x-nav-link>
            @endif

        </ul>



        {{-- USER MENU : LOGIN/LOGOUT --}}
        <div class="flex flex-col items-center md:flex-row">

          @if(Auth::check())

            <button id="usrButton" class="inline-flex items-center text-slate-50">
              <span class="px-2 whitespace-nowrap">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</span>
              <x-carbon-chevron-down class="w-5"/>
            </button>

            <div id="usrMenu" class="md:absolute mt-4 md:hidden flex flex-col bg-gray-50 w-full md:w-48 right-0 shadow-lg md:border md:border-gray-800">

              <ul class="flex flex-col">

                <li class="hover:bg-gray-800 hover:text-white w-full pl-4 py-2 bg-gray-100 text-black md:pl-2">

                  <a href="/profile" class="inline-flex items-center">
                    <div class="text-blue-600">
                      <x-carbon-password class="w-6"/>
                    </div>
                    <span class="px-2 whitespace-nowrap">Change Password</span>
                  </a>

                </li>

                <li class="hover:bg-gray-800 hover:text-white w-full pl-4 py-2 bg-gray-100 text-black md:pl-2">

                  <form method="POST" action="{{ route('logout') }}">
                  @csrf
                    <button :href="route('logout')" class="inline-flex items-center">
                      <div class="text-blue-600">
                        <x-carbon-logout class="w-6"/>
                      </div>
                      <span class="px-2 whitespace-nowrap">{{ __('ui.links.logout.text') }}</span>
                    </button>
                  </form>

                </li>

              </ul>
            </div>

          @else

            <a href="/logware/login" class="inline-flex items-center bg-blue-400 md:bg-transparent w-full p-4">
              <div class="text-blue-600 md:text-yellow-400 ">
                <x-heroicons::outline.arrow-right-end-on-rectangle class="w-6"/>
              </div>
              <span class="px-2">{{ __('ui.links.login.text')}}</span>
            </a>

          @endif

        </div>

    </div>

    <div id="hamburger" class="flex flex-col items-center gap-8 md:hidden">
        <x-carbon-menu class="w-6"/>
    </div>


  </nav>

  <script>


    // HAMBURGER MENU
    const hamburger = document.getElementById('hamburger')
    const menu = document.getElementById('menu')

    hamburger.addEventListener('click', () => {
      menu.classList.toggle('top-16')
      menu.classList.toggle('hidden')
    })










    // USER MENU
    const usrButton = document.getElementById('usrButton')
    const usrMenu = document.getElementById('usrMenu')


    if (usrMenu != null) {

      usrButton.addEventListener('click', () => {
        usrMenu.classList.toggle('md:hidden')
        usrMenu.classList.toggle('top-8')
      })

      usrMenu.addEventListener('mouseleave', () => {
        usrMenu.classList.toggle('md:hidden')
        usrMenu.classList.toggle('top-8')
      })
    }







</script>


</header>




