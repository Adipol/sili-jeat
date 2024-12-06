<x-client-layout>
    <h1 class="text-2xl font-bold">Información de paraísos fiscales (UE)</h1>
    <hr class="mt-2 mb-6 border-2 border-yellow-500">

    <article class="mb-6 card">
        <div class="text-sm text-justify text-gray-500 card-body bh-gray-100">
            <p>Estimado Usuario</p>
            <p>La lista de la UE de países y territorios no cooperadores a efectos fiscales forma parte de la labor
                emprendida por la UE para luchar contra la evasión y la elusión fiscales. La forman aquellos países que
                no han cumplido los compromisos adquiridos en materia de buena gobernanza en el ámbito fiscal dentro de
                un calendario específico, así como aquellos otros que se hayan negado a ello.</p>
        </div>
    </article>

    <article class="mb-6 card">
        <div class="text-sm card-body bh-gray-100">
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-3 lg:-mx-4">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-3 lg:px-4">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            País</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Tipo lista</th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($lists as $list)
                                        <tr>
                                            <td class="text-sm text-gray-900 font-small">
                                                <div class="ml-4">
                                                    {{ $list->name_one }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                <span
                                                    class="
    px-2 rounded-full font-semibold
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
