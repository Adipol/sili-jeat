<x-client-layout>
    <h1 class="text-3xl font-bold text-gray-900">Información de paraísos fiscales (GAFI)</h1>
    <hr class="mt-2 mb-6 border-2 border-blue-800">

    <article class="mb-6 card bg-gray-50 shadow-md rounded-lg">
        <div class="text-sm text-justify text-gray-800 card-body p-6">
            <p>
                <stron>Estimado Usuario,</stron>
            </p>
            <p class="mt-2">
                <span class="font-bold text-red-600">Lista Negra (GAFI-LN):</span> Jurisdicciones de alto riesgo sujetas
                a un llamado a la acción.
            </p>
            <p class="mt-2">
                <span class="font-bold text-amber-700">Lista Gris (GAFI-LG):</span> Jurisdicciones bajo mayor
                seguimiento.
            </p>
        </div>
    </article>

    <article class="mb-6 card">
        <div class="text-sm card-body bg-white shadow-lg rounded-lg p-6">
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-3 lg:-mx-4">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-3 lg:px-4">
                        <div class="overflow-hidden border-b border-gray-300 shadow-md sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200" role="table"
                                aria-label="Tabla de paraísos fiscales">
                                <thead class="bg-blue-900 text-white">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-bold tracking-wider text-left uppercase">
                                            País
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-bold tracking-wider text-left uppercase">
                                            Tipo lista
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($lists as $list)
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                {{ $list->name_one }}
                                            </td>
                                            <td class="px-6 py-4 text-sm">
                                                <span
                                                    class="px-3 py-1 rounded-full font-semibold
                                                        {{ $list->type_pep === 'GAFI-LG' ? 'text-amber-800 bg-amber-200' : '' }}
                                                        {{ $list->type_pep === 'GAFI-LN' ? 'text-red-800 bg-red-200' : '' }}">
                                                    {{ $list->type_pep }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</x-client-layout>
