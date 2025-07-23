 <div class="mt-5 md:col-span-2 md:mt-0">
     <div class="flex flex-col">
         <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
             <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                 <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                         <thead class="bg-blue-900">
                             <tr>
                                 <th scope="col"
                                     class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                     Archivo</th>
                                 <th scope="col"
                                     class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                     Descarga</th>
                             </tr>
                         </thead>
                         <tbody class="divide-y divide-gray-200 bg-white">
                             <tr>
                                 <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">

                                     @if ($others)
                                         {{ $others->lists }}
                                     @else
                                         Sin listas
                                     @endif
                                 </td>
                                 <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                     @if ($others)
                                         @if ($others->link_lists)
                                             <button class="btn btn-green mr-2 mt-4" wire:click="download_lists"><i
                                                     class="fa fa-download"></i>
                                             </button>
                                         @endif
                                     @else
                                         Sin descargas
                                     @endif

                                 </td>
                             </tr>
                             {{-- <tr>
                                 <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                     @if ($others)
                                         {{ $others->others }}
                                     @else
                                         Sin Codigos
                                     @endif
                                 </td>
                                 <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                     @if ($others)
                                         @if ($others->link_others)
                                             <button class="btn btn-green mr-2 mt-4" wire:click="download_others"><i
                                                     class="fa fa-download"></i>
                                             </button>
                                         @endif
                                     @else
                                         Sin descargas
                                     @endif

                                 </td>
                             </tr> --}}
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
