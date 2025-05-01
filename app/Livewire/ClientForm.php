<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Features\SupportRedirects\Redirector;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class ClientForm extends Component
{
    public ?Client $client;

    public array $form = [];

    public function mount(?Client $client): void
    {
        if ($client->toArray() === []) {
            $client = null;
        }

        $this->client = $client;
        $this->form = $client ? $client->toArray() : [];
    }

    public function render(): View
    {
        return view('livewire.client-form')->layout('layouts.app');
    }

    public function update(): Redirector|RedirectResponse
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
        
        return redirect()->back();
    }

    public function store(): Redirector|RedirectResponse
    {
        $validated = $this->validate([
            'form.name' => 'required|string|max:255',
            'form.last_name' => 'required|string|max:255',
            'form.email' => 'required|email|unique:clients,email,'.$this->client->id,
            'form.phone' => 'nullable|string',
            'form.business_name' => 'nullable|string',
        ]);

        Client::create($this->form);
        
        return redirect()->back();
    }
}
