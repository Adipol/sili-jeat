<x-client-layout>
    <h1 class="text-2xl font-bold">Información de la lista completa (Guatemala)</h1>
    <hr class="mt-2 mb-6 border-2 border-yellow-500">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>Bienvenido al sitio de Listas de Control</p>
            <p>Usted puede descargar las listas de control completa en formato Csv (archivo plano)</p>
        </div>
    </article>

    <article class="mb-6 card">
        <div class="text-sm card-body bh-gray-100">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>Fecha de carga: </strong>
                    @if ($complete)
                        {{ $complete->date->isoFormat('ll') }}
                    @endif
                </h1>
            </header>

            <div>
                @if ($complete)
                    @livewire('client.all-download-guatemala', ['download_all' => $complete], key($complete->id))
                @endif
            </div>

            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-3 lg:-mx-4">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-3 lg:px-4">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Código</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($codes as $code)
                                        <tr>
                                            <td class="text-sm text-gray-900 font-small">
                                                <div class="ml-4">
                                                    {{ $code->code }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
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
            <div class="mt-6 mb-6">
                <strong>Cantidad total: </strong>
                @if ($lists)
                    {{ $lists }}
                @endif
            </div>
        </div>
    </article>
</x-client-layout>
