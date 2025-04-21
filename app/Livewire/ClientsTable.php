<?php

namespace App\Livewire;

use App\Models\Client;
use Illuminate\View\View;
use Livewire\Component;

class ClientSTable extends Component
{
    public string $search = '';

    public function render(): View
    {
        $clients = Client::query()
            ->where('name', 'like', '%'.$this->search.'%')
            ->orWhere('last_name', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->orWhere('business_name', 'like', '%'.$this->search.'%')
            ->get();

        return view('livewire.clients-table', [
            'clients' => $clients,
        ])->layout('layouts.app');
    }
}
