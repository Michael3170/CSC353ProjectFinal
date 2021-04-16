<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class MusicUpload extends Component
{
    use WithFileUploads;

    public $music;
    public $filename;
    public function save()
    {
        
        $this->validate([
            'music' => 'required|max:2048', // 2MB Max
        ]);


        $this->filename = $this->music->store('photos');
        dd($this->music->getClientOriginalName());
    }
}