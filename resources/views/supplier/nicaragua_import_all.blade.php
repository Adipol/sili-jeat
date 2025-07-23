{{-- es el archivo para cargar la lista completa no tocar --}}
<x-import-layout>
    <h1 class="text-2xl font-bold">Importar la lista completa (Nicaragua)</h1>
    <hr class="mb-6 mt-2 border-2 border-yellow-500">

    <article class="card mb-6">
        <div class="card-body bh-gray-100 text-justify text-sm text-gray-500">
            <p>Estimado Usuario</p>
            <p>Usted puede importar las listas de control completa en formato Excel o Csv (archivo plano)</p>
        </div>
    </article>

    <div>
        @livewire('all-resources-nicaragua')
    </div>

</x-import-layout>
