<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Document;
use App\Models\Company;
use App\Models\Counter;



class DocumentForm extends Form
{
    public ?Document $document;

    // RECORD ID
    public $uid;

    // COMPANY
    public $zaman;
    public $bedel;

    #[Validate('required', message: 'Please select document type')]
    public $doc_type = 'EV';
    public $docTypes;
    public String $synopsis = '';

    // FILES
    public $files = [];




    public function setDocumentProps() {
        $this->docTypes =  config('conf_documents.docTypes');
    }






    public function setDocument(Int $id)
    {
        $this->uid = $id;
        $this->document = Document::find($id);
        $this->zaman = $this->document->zaman;
        $this->bedel = $this->document->bedel;
        $this->synopsis = $this->document->remarks ? $this->document->remarks:'';
        $this->doc_type = $this->document->doc_type;
    }


    public function store()
    {
        $this->validate();

        $props['user_id'] = Auth::id();
        $props['doc_type'] = $this->doc_type;
        $props['zaman'] = $this->zaman;
        $props['bedel'] = $this->bedel;
        $props['remarks'] = $this->synopsis;


        dd($props);

        $id = Document::create($props)->id;

        session()->flash('msg',[
            'type' => 'success',
            'text' => 'Document has been created successfully.'
        ]);

        return $id;
    }


    public function update($id)
    {
        $this->validate();

        $props['user_id'] = Auth::id();
        $props['doc_type'] = $this->doc_type;
        $props['zaman'] = $this->zaman;
        $props['bedel'] = $this->bedel;
        $props['remarks'] = $this->synopsis;

        $document = Document::findOrFail($id);

        $document->update($props);

        session()->flash('msg',[
            'type' => 'success',
            'text' => 'Document has been updated successfully.'
        ]);

        return true;
    }
}
