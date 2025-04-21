<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientForm extends Component
{
    public $client;

    public array $form = [];

    public function mount(Client $client)
    {
        $this->client = $client;
        $this->form = $client->toArray();
    }

    public function render()
    {
        return view('livewire.client-form')->layout('layouts.app');
    }

    public function update()
    {
        $validated = $this->validate([
            'form.name' => 'required|string|max:255',
            'form.last_name' => 'required|string|max:255',
            'form.email' => 'required|email|unique:clients,email,'.$this->client->id,
            'form.phone' => 'nullable|string',
            'form.business_name' => 'nullable|string',
        ]);
        
        $this->client->update($this->form);
        
        session()->flash('message', 'Client updated successfully!');
        
        return redirect()->route('clients-table');
    }
}
