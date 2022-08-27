<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public function render()
    {
        // $this->data = Contact::latest()->get();
        return view('livewire.contact-index', [
            "data" => Contact::latest()->get()
        ]);
    }
}
