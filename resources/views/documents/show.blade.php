<div class="container mx-auto p-4">

  <livewire:header type="Hero" title="{{ $conf['show']['title'] }}" subtitle="{{ $conf['show']['subtitle'] }}"/>

  @if(session('msg'))
      <livewire:flash-message :msg="session('msg')">
  @endif


  <div class="flex flex-col gap-4 p-4 bg-gray-100" >

      <div class="flex flex-col md:flex-row ">

        <div class="w-3/4">
            <p class="text-6xl mb-2 font-light">KAYIT-{{ $document->id }}</p>
        </div>

        <div class="w-1/4 text-right">

          {{-- EDIT --}}
          @if ($permissions->edit)
            <span class='has-tooltip'>
              <x-tooltip>Edit Document</x-tooltip>

              <button wire:click="edit" class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded inline-flex items-center">
                <x-ikon name="Edit" />
              </button>
            </span>
          @endif

          {{-- ADD NEW --}}
          <span class='has-tooltip'>
            <x-tooltip>Add New</x-tooltip>

            <button wire:click="add" class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded inline-flex items-center" >
                <x-ikon name="Add" />
            </button>
          </span>

          {{-- LIST ALL --}}
          <span class='has-tooltip'>
            <a href="/records" class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded inline-flex items-center">
              <x-ikon name="List" />
            </a>

            <x-tooltip>List All Documents</x-tooltip>
          </span>

          {{-- MORE BUTTON --}}

          @if (count($moreMenu) > 0)
          <livewire:dropdown :menu="$moreMenu"/>
          @endif

        </div>

      </div>




      <div class="flex justify-between">
            <x-badge lg negative label="{{ $document->bedel_formatted}} TL" />
            <x-badge lg black negative label="{{ $conf['docTypes'][$document->doc_type] }}" />
      </div>


      @if ($document->remarks)
        <div class="text-xl font-bold">Remarks</div>
        <div class="text-base">{!! $document->remarks !!}</div>
      @endif

      <livewire:file-list :model="$document" collection="Doc" label="Files"/>

  </div>

  <livewire:info-box :model="$document" />

</div>
