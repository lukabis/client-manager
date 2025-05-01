<?php

use App\Livewire\ClientForm;
use App\Livewire\ClientsTable;
use Illuminate\Support\Facades\Route;

Route::get('/', ClientsTable::class)->name('clients-table');
Route::get('/client/{client?}', ClientForm::class)->name('client-form');
