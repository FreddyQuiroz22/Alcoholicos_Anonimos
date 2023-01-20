<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed-top">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="">
                    <a href="{{ route('/') }}" class="">
                        <div class="flex items-center text-lg justify-items-start h-100">
                            <x-application-logo class="w-auto h-100" />
                            <span class="">Alcohólicos Anónimos Ecuador</span>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Nuevo libro') }}
                    </x-nav-link>
                    <x-nav-link :href="route('libros')" :active="request()->routeIs('libros')">
                        {{ __('Libros') }}
                    </x-nav-link>
                    <x-nav-link :href="route('getPedidos')" :active="request()->routeIs('getPedidos')">
                        {{ __('Pedidos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('getEntregados')" :active="request()->routeIs('getEntregados')">
                        {{ __('Entregados') }}
                    </x-nav-link>

                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Authentication -->
                        <x-dropdown-link :href="route('perfil',['id' => Auth::user()->id])">
                            {{ __('Mi perfil') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>

            </div>
        </div>
    </div>
</nav>
