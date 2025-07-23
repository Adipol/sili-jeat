<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation')

        <!-- Page Content -->
        <div class="mx-auto grid max-w-7xl grid-cols-5 px-4 py-8 sm:px-6 lg:px-8">
            <aside>
                <h1 class="mb-4 text-lg font-bold">Importar Listas</h1>
                <ul class="text-sm text-gray-600">

                    @can('Importar bd')
                        <li
                            class="@routeIs('import.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('import.index') }}">Base de datos</a>
                        </li>
                    @endcan

                    @can('Importar bd honduras')
                        <li
                            class="@routeIs('import.honduras.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('import.honduras.index') }}">Base de datos (Honduras)</a>
                        </li>
                    @endcan

                    @can('Importar bd el salvador')
                        <li
                            class="@routeIs('import.salvador.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('import.salvador.index') }}">Base de datos (El salvador)</a>
                        </li>
                    @endcan

                    @can('Importar bd paraguay')
                        <li
                            class="@routeIs('import.paraguay.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('import.paraguay.index') }}">Base de datos (Paraguay)</a>
                        </li>
                    @endcan

                    @can('Importar bd guatemala')
                        <li
                            class="@routeIs('import.guatemala.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('import.guatemala.index') }}">Base de datos (Guatemala)</a>
                        </li>
                    @endcan

                    @can('Importar bd nicaragua')
                        <li
                            class="@routeIs('import.nicaragua.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('import.nicaragua.index') }}">Base de datos (Nicaragua)</a>
                        </li>
                    @endcan

                    @can('Cargar incremental')
                        <li
                            class="@routeIs('supplier.incremental.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.incremental.index') }}">Incremental</a>
                        </li>
                    @endcan

                    @can('Cargar incremental honduras')
                        <li
                            class="@routeIs('supplier.incremental.honduras.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.incremental.honduras.index') }}">Incremental (Honduras)</a>
                        </li>
                    @endcan

                    @can('Cargar incremental el salvador')
                        <li
                            class="@routeIs('supplier.incremental.salvador.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.incremental.salvador.index') }}">Incremental (El salvador)</a>
                        </li>
                    @endcan

                    @can('Cargar incremental paraguay')
                        <li
                            class="@routeIs('supplier.incremental.paraguay.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.incremental.paraguay.index') }}">Incremental (Paraguay)</a>
                        </li>
                    @endcan

                    @can('Cargar incremental guatemala')
                        <li
                            class="@routeIs('supplier.incremental.guatemala.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.incremental.guatemala.index') }}">Incremental (Guatemala)</a>
                        </li>
                    @endcan

                    @can('Cargar incremental nicaragua')
                        <li
                            class="@routeIs('supplier.incremental.nicaragua.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.incremental.nicaragua.index') }}">Incremental (Nicaragua)</a>
                        </li>
                    @endcan

                    @can('Cargar completa')
                        <li
                            class="@routeIs('supplier.all.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.all.index') }}">Completa</a>
                        </li>
                    @endcan

                    @can('Cargar completa honduras')
                        <li
                            class="@routeIs('supplier.honduras.all.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.honduras.all.index') }}">Completa (Honduras)</a>
                        </li>
                    @endcan

                    @can('Cargar completa el salvador')
                        <li
                            class="@routeIs('supplier.salvador.all.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.salvador.all.index') }}">Completa (El salvador)</a>
                        </li>
                    @endcan

                    @can('Cargar completa paraguay')
                        <li
                            class="@routeIs('supplier.paraguay.all.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.paraguay.all.index') }}">Completa (Paraguay)</a>
                        </li>
                    @endcan

                    @can('Cargar completa guatemala')
                        <li
                            class="@routeIs('supplier.guatemala.all.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.guatemala.all.index') }}">Completa (Guatemala)</a>
                        </li>
                    @endcan

                    @can('Cargar completa nicaragua')
                        <li
                            class="@routeIs('supplier.nicaragua.all.index')border-yellow-500 @else @endif mb-1 border-l-4 border-transparent pl-2 leading-7">
                            <a href="{{ route('supplier.nicaragua.all.index') }}">Completa (Nicaragua)</a>
                        </li>
                    @endcan

                    {{-- @can('Cargar otros') --}}
                    {{-- <li
                            class="pl-2 mb-1 leading-7 border-l-4  @routeIs('supplier.other.index')border-yellow-500
@else
border-transparent @endif">
                            <a href="{{ route('supplier.other.index') }}">Dividir listas</a>
                        </li> --}}
                    {{-- @endcan --}}
                </ul>
            </aside>
            <div class="card col-span-4">
                <main class="card-body">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    @stack('scripts')
</body>

</html>
