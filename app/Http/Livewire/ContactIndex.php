<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    protected $listeners = [
        // 'contactStored'
        'contactStored' => 'handleStored'
    ];

    public function render()
    {
        // $this->data = Contact::latest()->get();
        return view('livewire.contact-index', [
            "contacts" => Contact::latest()->get()
        ]);
    }

    // public function contactStored()
    public function handleStored($contact)
    {
        // dd($contact);
        session()->flash('message', "Contact {$contact['name']} was stored!");
    }
}
