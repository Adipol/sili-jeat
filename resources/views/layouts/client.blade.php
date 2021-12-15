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
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation')

        <!-- Page Content -->
        <div class="grid grid-cols-5 px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <aside>
                <h1 class="mb-4 text-lg font-bold">Listas</h1>
                <ul class="text-sm text-gray-600">

                    @can('Descargar incremental')
                        <li
                            class="pl-2 mb-1 leading-7 border-l-4 @routeIs('incremental.index')border-yellow-500 @else border-transparent @endif">
                            <a href="{{ route('incremental.index') }}">Incremental</a>
                        </li>
                    @endcan

                    @can('Descargar incremental honduras')
                        <li
                            class="pl-2 mb-1 leading-7 border-l-4 @routeIs('incremental.honduras.index')border-yellow-500 @else border-transparent @endif">
                            <a href="{{ route('incremental.honduras.index') }}">Incremental (Honduras)</a>
                        </li>
                    @endcan

                    @can('Descargar completa')
                        <li
                            class="pl-2 mb-1 leading-7 border-l-4 @routeIs('complete.index')border-yellow-500 @else border-transparent @endif">
                            <a href="{{ route('complete.index') }}">Completa</a>
                        </li>
                    @endcan

                    @can('Descargar completa honduras')
                        <li
                            class="pl-2 mb-1 leading-7 border-l-4 @routeIs('complete.honduras.index')border-yellow-500 @else border-transparent @endif">
                            <a href="{{ route('complete.honduras.index') }}">Completa (Honduras)</a>
                        </li>
                    @endcan

                </ul>
            </aside>
            <div class="col-span-4 card">
                <main class="card-body">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
