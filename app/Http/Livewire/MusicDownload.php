<?php

namespace App\Http\Livewire;

use Livewire\Component;




class ExportButton extends Component
{
    public function export()
    {
        return Storage::disk('exports')->download('export.csv');
    }
}