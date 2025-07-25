@php
    $nav_links = [
        [
            'name' => 'Consultas',
            'route' => route('consults.index'),
        ],
        [
            'name' => 'Descargar Información',
            'route' => route('incremental.index'),
        ],
        [
            'name' => 'Cargar Información',
            'route' => route('import.index'),
        ],
    ];
@endphp

<nav class="bg-blue-900" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button x-on:click="open=true" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <a href="/" class="flex flex-shrink-0 items-center">
                    <img class="hidden h-8 w-auto lg:block" src="{{ asset('img/home/logow.png') }}" alt="Workflow">
                </a>
                @auth
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">

                            @can('Buscar')
                                <a href="{{ route('consults.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas</a>
                            @endcan

                            @can('Buscar honduras')
                                <a href="{{ route('consults.honduras.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                                    (Honduras)
                                </a>
                            @endcan

                            @can('Buscar el salvador')
                                <a href="{{ route('consults.salvador.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                                    (El salvador)</a>
                            @endcan

                            @can('Buscar paraguay')
                                <a href="{{ route('consults.paraguay.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                                    (Paraguay)</a>
                            @endcan

                            @can('Buscar guatemala')
                                <a href="{{ route('consults.guatemala.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                                    (Guatemala)</a>
                            @endcan

                            @can('Buscar nicaragua')
                                <a href="{{ route('consults.nicaragua.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                                    (Nicaragua)</a>
                            @endcan

                            @can('Descargar listas')
                                <a href="{{ route('incremental.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                                    Información</a>
                            @endcan

                            @can('Descargar listas honduras')
                                <a href="{{ route('incremental.honduras.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                                    Información (Honduras)</a>
                            @endcan

                            @can('Descargar listas el salvador')
                                <a href="{{ route('incremental.salvador.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                                    Información (El salvador)</a>
                            @endcan

                            @can('Descargar listas paraguay')
                                <a href="{{ route('incremental.paraguay.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                                    Información (Paraguay)</a>
                            @endcan

                            @can('Descargar listas guatemala')
                                <a href="{{ route('incremental.guatemala.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                                    Información (Guatemala)</a>
                            @endcan
                            @can('Descargar listas nicaragua')
                                <a href="{{ route('incremental.nicaragua.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                                    Información (Nicaragua)</a>
                            @endcan

                            @can('Cargar listas')
                                <a href="{{ route('import.index') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Cargar
                                    Información</a>
                            @endcan
                        </div>
                    </div>
                @endauth

            </div>
            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button
                        class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <!-- Profile dropdown -->
                    <div class="display:inline relative ml-3 inline" x-data="{ open: false }">

                        <button x-on:click=" open=true " type="button"
                            class="z-0 flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            id="user-menu" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                        </button>
                        <div x-show="open" x-on:click.away="open=false"
                            class="absolute right-0 z-20 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="{{ route('profile.show') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tu
                                Perfil</a>

                            @can('Ver dashboard')
                                <a href="{{ route('admin.home') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Administrador</a>
                            @endcan

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                                    onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            this.closest('form').submit();">Salir</a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{ route('login') }}"
                        class="rounded-md border-2 border-white bg-blue-800 px-3 py-2 text-sm font-medium text-white hover:bg-white hover:text-gray-700">Ingresar</a>
                </div>
            @endauth
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false">
        <div class="space-y-1 px-2 pb-3 pt-2">

            @can('Buscar')
                <a href="{{ route('consults.index') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                    aria-current="page">Consultas</a>
            @endcan

            @can('Buscar honduras')
                <a href="{{ route('consults.honduras.index') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                    aria-current="page">Consultas (Honduras)</a>
            @endcan

            @can('Buscar el salvador')
                <a href="{{ route('consults.salvador.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                    (El salvador)</a>
            @endcan

            @can('Buscar paraguay')
                <a href="{{ route('consults.paraguay.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                    (Paraguay)</a>
            @endcan

            @can('Buscar guatemala')
                <a href="{{ route('consults.guatemala.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                    (Guatemala)</a>
            @endcan

            @can('Buscar nicaragua')
                <a href="{{ route('consults.nicaragua.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Consultas
                    (Nicaragua)</a>
            @endcan

            @can('Descargar listas')
                <a href="{{ route('incremental.index') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                    aria-current="page">Descargar información</a>
            @endcan

            @can('Descargar listas honduras')
                <a href="{{ route('incremental.honduras.index') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                    aria-current="page">Descargar información (Honduras)</a>
            @endcan

            @can('Descargar listas el salvador')
                <a href="{{ route('incremental.salvador.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                    Información (El salvador)</a>
            @endcan

            @can('Descargar listas paraguay')
                <a href="{{ route('incremental.paraguay.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                    Información (Paraguay)</a>
            @endcan

            @can('Descargar listas guatemala')
                <a href="{{ route('incremental.guatemala.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                    Información (Guatemala)</a>
            @endcan

            @can('Descargar listas nicaragua')
                <a href="{{ route('incremental.nicaragua.index') }}"
                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-blue-700 hover:text-white">Descargar
                    Información (Nicaragua)</a>
            @endcan

            @can('Cargar listas')
                <a href="{{ route('import.index') }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                    aria-current="page">Cargar información</a>
            @endcan
        </div>
    </div>
</nav>
