<div class="mt-5 md:col-span-2 md:mt-0">
    <article class="card mb-6">
        <div class="card-body bh-gray-100 text-sm">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>AMLC</strong> Lista completa (Nicaragua)
                </h1>
            </header>

            <form class="form-horizontal" wire:submit.prevent="save">
                @csrf

                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Fecha de
                                    carga</label>
                                <input type="date" name="fecha-carga" id="fecha_carga" autocomplete="given-name"
                                    required="required" wire:model="fecha_carga"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Guardar
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </article>

    <article class="card mb-6">
        <div class="card-body bh-gray-100 text-sm">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>Datos de Carga</strong>
                </h1>
            </header>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-blue-900">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Fecha de registro
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Fecha de carga
                                    </th>
                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Archivo XLSX
                                    </th> --}}
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Archivo CSV
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($lists as $list)
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            {{ $list->updated_at->isoFormat('lll') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            {{ $list->date->isoFormat('ll') }}
                                        </td>
                                        {{-- <td class="flex px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @livewire('incremental-xlsx-honduras',['list'=>$list],key('user-profile-one-'.$list->id))
                                        </td> --}}
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            @livewire('incremental-csv-nicaragua', ['list' => $list], key('user-profile-two-' . $list->id))
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
