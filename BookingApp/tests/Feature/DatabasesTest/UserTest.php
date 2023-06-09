<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
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

    public function users_can_be_created(): void
    {
        $user = User::factory()->create();

        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
        ]);
    }

    public function users_can_be_delated(): void
    {
        $user = User::factory()->create();
 
        $user->delete();
        
        $this->assertModelMissing($user);
    }

    public function users_can_be_edited(): void
    {
        $user = User::factory()->create();
 
        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
        ]);

        $user->name = "newName";
  
        $this->assertDatabaseHas('users', [
            'name' => "newName",
        ]);
        
    }
}
