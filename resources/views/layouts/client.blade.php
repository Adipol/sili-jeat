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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation')

        <!-- Page Content -->
        <div class="mx-auto grid max-w-7xl grid-cols-5 px-4 py-8 sm:px-6 lg:px-8">
            <aside>
                <h1 class="mb-4 text-lg font-bold">Listas</h1>
                <ul class="text-sm text-gray-600">

                    @can('Descargar incremental')
                        <li
                            class="@if (Route::is('incremental.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('incremental.index') }}" class="block">Incremental</a>
                        </li>
                    @endcan

                    @can('Descargar incremental honduras')
                        <li
                            class="@if (Route::is('incremental.honduras.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('incremental.honduras.index') }}" class="block">Incremental (Honduras)</a>
                        </li>
                    @endcan

                    @can('Descargar incremental el salvador')
                        <li
                            class="@if (Route::is('incremental.salvador.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('incremental.salvador.index') }}" class="block">Incremental (El Salvador)</a>
                        </li>
                    @endcan

                    @can('Descargar incremental paraguay')
                        <li
                            class="@if (Route::is('incremental.paraguay.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('incremental.paraguay.index') }}" class="block">Incremental (Paraguay)</a>
                        </li>
                    @endcan

                    @can('Descargar incremental guatemala')
                        <li
                            class="@if (Route::is('incremental.guatemala.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('incremental.guatemala.index') }}" class="block">Incremental (Guatemala)</a>
                        </li>
                    @endcan

                    @can('Descargar incremental nicaragua')
                        <li
                            class="@if (Route::is('incremental.nicaragua.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('incremental.nicaragua.index') }}" class="block">Incremental (Nicaragua)</a>
                        </li>
                    @endcan

                    @can('Descargar completa')
                        <li
                            class="@if (Route::is('complete.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('complete.index') }}" class="block">Completa</a>
                        </li>
                    @endcan

                    @can('Descargar completa honduras')
                        <li
                            class="@if (Route::is('complete.honduras.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('complete.honduras.index') }}" class="block">Completa (Honduras)</a>
                        </li>
                    @endcan

                    @can('Descargar completa el salvador')
                        <li
                            class="@if (Route::is('complete.salvador.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('complete.salvador.index') }}" class="block">Completa (El Salvador)</a>
                        </li>
                    @endcan

                    @can('Descargar completa paraguay')
                        <li
                            class="@if (Route::is('complete.paraguay.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('complete.paraguay.index') }}" class="block">Completa (Paraguay))</a>
                        </li>
                    @endcan

                    @can('Descargar completa guatemala')
                        <li
                            class="@if (Route::is('complete.guatemala.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('complete.guatemala.index') }}" class="block">Completa (Guatemala))</a>
                        </li>
                    @endcan

                    @can('Descargar completa nicaragua')
                        <li
                            class="@if (Route::is('complete.nicaragua.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('complete.nicaragua.index') }}" class="block">Completa (Nicaragua))</a>
                        </li>
                    @endcan

                    @can('Descargar gafi')
                        <li
                            class="@if (Route::is('gafi.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('gafi.index') }}" class="block">Paraísos Fiscales (GAFI)</a>
                        </li>
                    @endcan

                    @can('Descargar ue')
                        <li
                            class="@if (Route::is('ue.index')) text-yellow-500 bg-yellow-50 @endif mb-1 border-l-4 border-transparent border-yellow-500 pl-2 font-bold leading-7 text-gray-600 hover:bg-yellow-50 hover:text-yellow-500">
                            <a href="{{ route('ue.index') }}" class="block">Paraísos Fiscales (UE)</a>
                        </li>
                    @endcan
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
</body>

</html>
