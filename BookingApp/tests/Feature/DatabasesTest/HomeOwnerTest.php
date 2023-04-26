<?php

namespace Tests\Feature;

use App\Models\HomeOwner;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeOwnerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function home_owner_can_be_created(): void
    {
        $homeOwner = HomeOwner::factory()->create();

        $this->assertDatabaseHas('users', [
            'name' => $homeOwner->name,
            'email' => $homeOwner->email,
            'phone_number' => $homeOwner->phone_number
        ]);
    }

    public function home_owner_can_be_delated(): void
    {
        $homeOwner = HomeOwner::factory()->create();
 
        $homeOwner->delete();
        
        $this->assertModelMissing($homeOwner);
    }

    public function home_owner_can_be_edited(): void
    {
        $homeOwner = HomeOwner::factory()->create();
 
        $this->assertDatabaseHas('users', [
            'name' => $homeOwner->name,
            'email' => $homeOwner->email,
            'phone_number' => $homeOwner->phone_number
        ]);

        $homeOwner->name = "newName";
  
        $this->assertDatabaseHas('home_owner', [
            'name' => "newName",
        ]);
        
    }
}
