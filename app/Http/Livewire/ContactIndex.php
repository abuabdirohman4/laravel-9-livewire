<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    public $statusUpdate = false;

    protected $listeners = [
        // 'contactStored'
        'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdated'
    ];

    public function render()
    {
        // $this->data = Contact::latest()->get();
        return view('livewire.contact-index', [
            // "contacts" => Contact::latest()->get()
            "contacts" => Contact::latest()->paginate(5)
        ]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    // public function contactStored()
    public function handleStored($contact)
    {
        session()->flash('message', "Contact {$contact['name']} was stored!");
    }

    public function handleUpdated($contact)
    {
        session()->flash('message', "Contact was updated! to {$contact['name']}");
    }

    public function destroy($id)
    {   
        if ($id) {
            $contact = Contact::find($id);
            $contact->delete();
            session()->flash('message', "Contact {$contact['name']} was deleted");
        }
    }

    // Hirarki
    // ContactUpdate
    // ContactIndex
    // ContactCreate

    // ContactIndex
    // ContactUpdate
}
