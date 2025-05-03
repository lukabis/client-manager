<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ClientForm;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ClientFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(ClientForm::class)
            ->assertStatus(200);
    }

    /** @test */
    public function validates_required_fields_while_creating_new_client()
    {
        $client = new Client;

        Livewire::test(ClientForm::class, ['client' => $client])
            ->set('form.name', '')
            ->set('form.last_name', '')
            ->set('form.email', '')
            ->call('store')
            ->assertHasErrors([
                'form.name' => 'required',
                'form.last_name' => 'required',
                'form.email' => 'required',
            ]);
    }

        /** @test */
        public function successfully_creates_a_new_client()
        {
            $client = new Client;
    
            Livewire::test(ClientForm::class, ['client' => $client])
                ->set('form.name', 'John')
                ->set('form.last_name', 'Doe')
                ->set('form.email', 'john.doe@example.com')
                ->set('form.phone', '123-456-7890')
                ->set('form.business_name', 'Example Corp')
                ->call('store');
    
            $this->assertDatabaseHas('clients', [
                'name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'business_name' => 'Example Corp',
            ]);
        }
    
        /** @test */
        public function successfully_updates_existing_client()
        {
            $client = Client::create([
                'name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '987-654-3210',
                'business_name' => 'Old Company',
            ]);
    
            Livewire::test(ClientForm::class, ['client' => $client])
                ->set('form.name', 'Jane')
                ->set('form.last_name', 'Smith-Johnson')
                ->set('form.email', 'jane.johnson@example.com')
                ->set('form.phone', '555-123-4567')
                ->set('form.business_name', 'New Company LLC')
                ->call('update');
    
            $this->assertDatabaseHas('clients', [
                'id' => $client->id,
                'name' => 'Jane',
                'last_name' => 'Smith-Johnson',
                'email' => 'jane.johnson@example.com',
                'phone' => '555-123-4567',
                'business_name' => 'New Company LLC',
            ]);
    
            $this->assertDatabaseMissing('clients', [
                'id' => $client->id,
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '987-654-3210',
                'business_name' => 'Old Company',
            ]);
        }
}
