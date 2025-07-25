<x-app-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <nav class="mb-6 block flex h-12 items-center rounded-md border border-gray-400 bg-gray-500 bg-opacity-10 p-4 text-left text-sm text-gray-600"
            role="alert">
            <ol class="list-reset text-grey-dark flex">
                <li><a href="/" class="font-bold"><i class="fas fa-home"></i></a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('consults.guatemala.index') }}" class="font-bold">Consultas</a></li>
                <li><span class="mx-2">/</span></li>
                <li>Allegados</li>
            </ol>
        </nav>

        <div class="mx-auto max-w-7xl overflow-hidden bg-white px-4 py-6 shadow sm:rounded-lg sm:px-6 lg:px-8">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Persona
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Información
                </p>
            </div>
            <div class="border-t border-gray-500">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Primer Nombre
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->name_one }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Segundo Nombre
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->name_two }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Primer Apellido
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->last_name_one }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Segundo Apellido
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->last_name_two }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Tipo de documento
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->type_document }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Número de documento
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->nro_document }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            País
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->country }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Cargo
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->position }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Entidad
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->entity }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Gestión
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            {{ $pep->management }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="mx-auto flex max-w-7xl flex-row-reverse px-4 py-1 sm:px-6 lg:px-8">
        <a class="btn btn-green" href="{{ route('allegado-pdf-nicaragua', $pep->id_pep) }}">
            <i class="fas fa-file-pdf"></i> Imprimir
        </a>
    </div>

    <div class="mx-auto flex max-w-7xl flex-col px-4 py-6 sm:px-6 lg:px-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Primer nombre
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Segundo nombre
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Primer Apellido
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Segundo Apellido
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Documento
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Numero
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Tipo allegado
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500">
                                    Detalle
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">

                            @foreach ($all as $one)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->name_one }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->name_two }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->last_name_one }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->last_name_two }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->type_document }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->nro_document }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->type_fam }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $one->detail }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
