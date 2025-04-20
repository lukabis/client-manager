<?php

use App\Livewire\ClientForm;
use App\Livewire\ClientTable;
use Illuminate\Support\Facades\Route;

Route::get('/', ClientTable::class)->name('clients-table');
Route::get('/client/{client}', ClientForm::class)->name('client-form');
