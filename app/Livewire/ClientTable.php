<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientTable extends Component
{
    public $clients;

    public function mount()
    {
        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.client-table');
    }
}
