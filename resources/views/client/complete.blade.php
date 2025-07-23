<x-client-layout>
    <h1 class="text-2xl font-bold">Información de la lista completa</h1>
    <hr class="mb-6 mt-2 border-2 border-yellow-500">

    <article class="card mb-6">
        <div class="card-body bg-gray-100 text-justify text-sm text-gray-500">
            <p>Estimado Usuario</p>
            <p>Bienvenido al sitio de Listas de Control</p>
            <p>Usted puede descargar las listas de control completa en formato Csv (archivo plano)</p>
        </div>
    </article>

    <article class="card mb-6">
        <div class="card-body bg-gray-100 text-sm">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>Fecha de actualización: </strong>
                    @if ($complete)
                        {{ $complete->date->isoFormat('D [de] MMMM [de] YYYY') }}
                    @endif
                </h1>
            </header>

            <div>
                @if ($complete)
                    @livewire('client.all-download', ['download_all' => $complete], key($complete->id))
                @endif
            </div>

            <div class="mt-6 flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-3 lg:-mx-4">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-3 lg:px-4">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <!-- Encabezados -->
                                <thead class="bg-blue-900">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                            Código</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                            Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($codes as $index => $code)
                                        <tr class="{{ $index % 2 == 0 ? 'bg-blue-50' : 'bg-blue-100' }}">
                                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                                <div class="ml-4">
                                                    {{ $code->code }}
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                                {{ $code->code_count }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-6 mt-6">
                <strong>Cantidad total: </strong>
                @if ($lists)
                    {{ $lists }}
                @endif
            </div>
            <div class="mb-6">
                @livewire('client.other')
            </div>
        </div>
    </article>
</x-client-layout>
