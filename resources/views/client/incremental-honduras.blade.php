<x-client-layout x-data="{ open: false }" class="mt-2">

    <h1 class="text-3xl font-bold text-gray-800">Información de la lista incremental (Honduras)</h1>
    <hr class="mt-4 mb-8 border-2 border-yellow-500">

    <article class="mb-8 bg-gray-100 shadow rounded-lg p-6">
        <div class="text-sm text-gray-600">
            <p class="mb-2 font-medium">Estimado Usuario,</p>
            <p>Bienvenido al sitio de Listas de Control.</p>
            <p>Puedes descargar las listas de control incremental en formato CSV (archivo plano).</p>
        </div>
    </article>

    @livewire('client.incremental-download-honduras')

</x-client-layout>
