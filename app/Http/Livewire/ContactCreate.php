<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    // public $contacts;

    // public function mount($contacts)
    // {
    //     $this->contacts = $contacts;
    // }

    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        Contact::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
        
        $this->resetInput();
        
        $this->emit('contactStored');

        // Kirim parameter
        // $this->emit('contactStored', $contact);
        // $contact = Contact::create([
        //     'name' => $this->name,
        //     'phone' => $this->phone
        // ]);
    }

    public function resetInput()
    {
        $this->name = NULL;
        $this->phone = NULL;
    }
}
