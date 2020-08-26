<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Mail\Markdown;

class Content extends Component
{
    public $activeButton;

    public function mount()
    {
      $this->activeButton = "whatis";

    }
    public function navto($buttonName)
    {


        switch ($buttonName) {
            case 'example':
                redirect()->route('crudwire');
                break;
            default:
                $this->activeButton = $buttonName;
                break;
        }
    }
    public function render()
    {
        return view('livewire.content');
    }
}
