<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    protected $listeners = [
        // 'contactStored' => 'handleStored'
        'contactStored'
    ];

    public function render()
    {
        // $this->data = Contact::latest()->get();
        return view('livewire.contact-index', [
            "contacts" => Contact::latest()->get()
        ]);
    }

    // public function handleStored($contact)
    public function contactStored()
    {
        // dd($contact);
    }
}
