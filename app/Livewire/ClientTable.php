<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientTable extends Component
{
    public string $search = '';

    public function render()
    {
        $clients = Client::query()
            ->where('name', 'like', '%'.$this->search.'%')
            ->orWhere('last_name', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->orWhere('business_name', 'like', '%'.$this->search.'%')
            ->get();

        return view('livewire.client-table', [
            'clients' => $clients,
        ])->layout('layouts.app');
    }
}
