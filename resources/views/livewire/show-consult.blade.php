<div>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-table>
            <!-- Barra de búsqueda -->
            <div class="px-6 py-4">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price" class="block text-sm font-medium text-gray-700">
                            Nombre o número de documento
                        </label>
                        <x-jet-input class="w-full mt-1"
                            placeholder="Escriba el nombre de persona o su número de documento" type="text"
                            wire:model="search" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price" class="block text-sm font-medium text-gray-700">Apellido</label>
                        <x-jet-input class="w-full mt-1" placeholder="Escriba el apellido de la persona" type="text"
                            wire:model="search1" />
                    </div>
                </div>
            </div>
    </div>

    <!-- Tabla -->
    @if ($peps->count())
        <table class="min-w-full divide-y divide-gray-200">
            <!-- Cabecera de la tabla con el mismo color que el navbar -->
            <thead class="bg-blue-900 sticky top-0 z-10">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase cursor-pointer"
                        wire:click="order('name_one')">
                        Nombre
                        @if ($sort == 'name_one')
                            @if ($direction == 'asc')
                                <i class="float-right mt-1 fas fa-sort-alpha-down"></i>
                            @else
                                <i class="float-right mt-1 fas fa-sort-alpha-up"></i>
                            @endif
                        @else
                            <i class="float-right mt-1 fas fa-sort"></i>
                        @endif
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase cursor-pointer"
                        wire:click="order('type_document')">
                        Documento
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase cursor-pointer"
                        wire:click="order('nro_document')">
                        Nro. de Documento
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase cursor-pointer"
                        wire:click="order('extension')">
                        Extensión
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase cursor-pointer"
                        wire:click="order('code')">
                        Tipo
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase cursor-pointer"
                        wire:click="order('position')">
                        Cargo
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase cursor-pointer"
                        wire:click="order('management')">
                        Gestión
                    </th>
                    <th scope="col" colspan="3"
                        class="px-6 py-3 text-xs font-medium text-left text-white uppercase">
                        Opciones
                    </th>
                </tr>
            </thead>
            <!-- Cuerpo de la tabla -->
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($peps as $pep)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 text-xs font-medium">{{ $pep->full_name }}</td>
                        <td class="px-6 py-4 text-xs font-medium">{{ $pep->type_document }}</td>
                        <td class="px-6 py-4 text-xs font-medium">{{ $pep->nro_document }}</td>
                        <td class="px-6 py-4 text-xs font-medium">{{ $pep->extension }}</td>
                        <td class="px-6 py-4 text-xs font-medium">{{ $pep->code }}</td>
                        <td class="px-6 py-4 text-xs font-medium">
                            <div class="text-sm text-gray-900">{{ $pep->position }}</div>
                            <div class="text-sm text-gray-500">{{ $pep->entity }}</div>
                        </td>
                        <td class="px-6 py-4 text-xs font-medium">{{ $pep->management }}</td>
                        <td style="width:5%">
                            @livewire('show-pep', ['pep' => $pep], key('consul-profile-one-' . $pep->id_register))
                        </td>
                        <td style="width:5%">
                            <a class="btn btn-red" href="{{ route('download-pdf', $pep->id_register) }}">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                        </td>
                        <td style="width:5%">
                            @livewire('allegado', ['pep' => $pep], key('consul-profile-two-' . $pep->id))
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="px-6 py-4 text-center">
            <p class="px-6 py-4">No existe ningún registro que coincida</p>
            <a class="btn btn-red" href="{{ route('download-pdf-null') }}">Imprimir detalle</a>
        </div>
    @endif

    <!-- Paginación -->
    @if ($peps->hasPages())
        <div class="px-6 py-3">
            {{ $peps->links() }}
        </div>
    @endif

    </x-table>
</div>
