<x-client-layout>
    <!-- Título -->
    <h1 class="text-2xl font-bold text-gray-800">Información de paraísos fiscales (UE)</h1>
    <hr class="mt-2 mb-6 border-2 border-yellow-500">

    <!-- Introducción -->
    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bg-gray-100 p-6 rounded-md">
            <p class="mb-4 font-medium">Estimado Usuario,</p>
            <p>
                La lista de la UE de países y territorios no cooperadores a efectos fiscales forma parte de la labor
                emprendida por la UE para luchar contra la evasión y la elusión fiscales. La forman aquellos países que
                no han cumplido los compromisos adquiridos en materia de buena gobernanza en el ámbito fiscal dentro de
                un calendario específico, así como aquellos otros que se hayan negado a ello.
            </p>
        </div>
    </article>

    <!-- Tabla -->
    <article class="mb-6 card">
        <div class="text-sm card-body bg-gray-100 p-6 rounded-md">
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-3 lg:-mx-4">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-3 lg:px-4">
                        <div class="overflow-hidden border border-gray-300 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <!-- Encabezados -->
                                <thead class="bg-blue-900">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            País
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                            Tipo lista
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Cuerpo -->
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($lists as $list)
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-4 text-sm text-gray-900 font-medium">
                                                {{ $list->name_one }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                <span
                                                    class="
                                                        px-2 py-1 rounded-full font-semibold
                                                        {{ $list->type_pep === 'GAFI-LG' ? 'text-gray-800 bg-gray-200' : '' }}
                                                        {{ $list->type_pep === 'GAFI-LN' ? 'text-white bg-black' : '' }}
                                                    ">
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
