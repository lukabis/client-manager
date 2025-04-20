<?php

use App\Livewire\ClientForm;
use Illuminate\Support\Facades\Route;
use App\Livewire\ClientTable;

Route::get('/', ClientTable::class)->name('clients-table');
Route::get('/client/{client}', ClientForm::class)->name('client-form');
