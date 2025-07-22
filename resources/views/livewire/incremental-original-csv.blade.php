<div>
    <a class="btn btn-green" wire:click="$set('open',true)"><i class="fas fa-upload"></i></a>
    @if ($control->link_csv)
        <a class="btn btn-blue" wire:click="download_csv"><i class="fas fa-download"></i></a>
    @endif
    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            Cargar
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Tipo de archivo" />
                <x-jet-input type="text" readonly class="w-full" value="Csv" readonly />
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo ASO-PEP" />
                    <x-jet-input wire:model="control.aso_pep_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización ASO-PEP" />
                    <x-jet-input wire:model="control.aso_pep_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo FBI" />
                    <x-jet-input wire:model="control.fbi_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización FBI" />
                    <x-jet-input wire:model="control.fbi_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo F-PEP" />
                    <x-jet-input wire:model="control.f_pep_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización F-PEP" />
                    <x-jet-input wire:model="control.f_pep_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo GAFI" />
                    <x-jet-input wire:model="control.gafi_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización GAFI" />
                    <x-jet-input wire:model="control.gafi_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo INTERPOL" />
                    <x-jet-input wire:model="control.interpol_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización INTERPOL" />
                    <x-jet-input wire:model="control.interpol_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo OFAC" />
                    <x-jet-input wire:model="control.ofac_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización OFAC" />
                    <x-jet-input wire:model="control.ofac_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo ONU" />
                    <x-jet-input wire:model="control.onu_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización ONU" />
                    <x-jet-input wire:model="control.onu_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo OPI" />
                    <x-jet-input wire:model="control.opi_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización OPI" />
                    <x-jet-input wire:model="control.opi_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo PEP-EX" />
                    <x-jet-input wire:model="control.pep_ex_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización PEP-EX" />
                    <x-jet-input wire:model="control.pep_ex_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo PEP-NAL" />
                    <x-jet-input wire:model="control.pep_nal_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización PEP-NAL" />
                    <x-jet-input wire:model="control.pep_nal_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo PEPU-EX" />
                    <x-jet-input wire:model="control.pepu_ex_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización PEPU-EX" />
                    <x-jet-input wire:model="control.pepu_ex_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo PEPU-NAL" />
                    <x-jet-input wire:model="control.pepu_nal_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización PEPU-NAL" />
                    <x-jet-input wire:model="control.pepu_nal_upgrade" type="text" class="block w-full"
                        readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo UE" />
                    <x-jet-input wire:model="control.ue_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización UE" />
                    <x-jet-input wire:model="control.ue_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo PF-UE" />
                    <x-jet-input wire:model="control.pf_ue_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización PF_UE" />
                    <x-jet-input wire:model="control.pf_ue_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo ENGEL" />
                    <x-jet-input wire:model="control.engel_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización ENGEL" />
                    <x-jet-input wire:model="control.engel_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo UK" />
                    <x-jet-input wire:model="control.uk_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización UK" />
                    <x-jet-input wire:model="control.uk_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo EUROPOL" />
                    <x-jet-input wire:model="control.europol_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización EUROPOL" />
                    <x-jet-input wire:model="control.europol_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo CANADIENSES" />
                    <x-jet-input wire:model="control.canadienses_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización CANADIENSES" />
                    <x-jet-input wire:model="control.canadienses_upgrade" type="text" class="block w-full"
                        readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo EXP" />
                    <x-jet-input wire:model="control.ex_peps_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización EXP" />
                    <x-jet-input wire:model="control.ex_peps_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo IPR" />
                    <x-jet-input wire:model="control.ipr_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización IPR" />
                    <x-jet-input wire:model="control.ipr_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo DEA" />
                    <x-jet-input wire:model="control.dea_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización DEA" />
                    <x-jet-input wire:model="control.dea_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="mb-4 grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Nuevo UPA" />
                    <x-jet-input wire:model="control.upa_new" type="text" class="block w-full" readonly />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <x-jet-label value="Actualización UPA" />
                    <x-jet-input wire:model="control.upa_upgrade" type="text" class="block w-full" readonly />
                </div>
            </div>
            <div class="col-span-6 mb-4 mt-5">
                <label for="about" class="block text-sm font-medium text-gray-700">
                    Observaciones
                </label>
                <div class="mt-1">
                    <textarea id="description" name="description" rows="3" wire:model="control.description" readonly
                        class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                </div>
            </div>
            <div>
                <input type="file" wire:model="file" id="{{ $identificador }}">
                <x-jet-input-error for="file" />
            </div>
            <div wire:loading wire:target="file" class="mb-4 border border-red-400 bg-red-100">
                <strong class="font-bold">Archivo cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que el archivo se haya procesado.</span>
            </div>
        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save_csv" wire:loading.attr="disabled" class="disabled:opacity-25">
                Guardar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
