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
}
