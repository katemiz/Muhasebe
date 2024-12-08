<section class="container mx-auto p-4 bg-white">

    <livewire:header
        type="Hero"
        title="{{ $this->form->uid ? $conf['formEdit']['title'] : $conf['formCreate']['title'] }}"
        subtitle="{{ $this->form->uid ? $conf['formEdit']['subtitle'] : $conf['formCreate']['subtitle'] }}"
        />

    <form wire:submit="{{ $this->form->uid ? 'update' : 'save' }}" action="post">

        @csrf

        @if ($this->form->uid)
        @method('patch')
        @endif

        @if ($this->form->uid)
        <h1 class="text-5xl font-light my-6">KAYIT-{{ $this->form->uid }}</h1>
        @endif


        <div class="flex flex-row">

            <div class="flex w-1/3 mr-2">
                <x-myselect label="Tür" name="doc_type" :options="$this->form->docTypes" :selected="$this->form->doc_type"
                    wire:model="form.doc_type" />
            </div>

            <div class="flex w-1/3 mx-2">
                <x-datetime-picker
                    wire:model="form.zaman"
                    label="Zaman"
                    placeholder="Zaman"
                    display-format="DD-MMM-YYYY"
                    without-time
                />
            </div>

            <div class="flex w-1/3 ml-2">
                <x-input
                    wire:model="form.bedel"
                    label="Bedel"
                    suffix="TL"
                    placeholder="eg 1200"
                />
            </div>

        </div>

        <x-quill wire:model="form.remarks" label="Remarks" name="remarks" :value="$this->form->remarks" />

        @if ($this->form->uid)
        <livewire:file-list :model="$this->form->document" collection="Doc" label="Files" is_editable="true"/>
        @endif

        <x-file-upload :files="$files" name="files" is_multiple="true" />

        <div class="flex justify-end my-4">

            <a href="{{ $this->form->uid ? '/records/'.$this->form->uid : '/records' }}" class="text-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 bg-red-700 hover:bg-red-800 p-2 rounded inline-flex items-center">
                Cancel
            </a>

            <button type="submit"
                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                {{ $this->form->uid ? 'Update Record' : 'Add Record' }}
            </button>
        </div>

    </form>

</section>
