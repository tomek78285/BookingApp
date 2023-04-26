<?php

namespace Tests\Feature;

use App\Models\Opinions;
use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OpinionTest extends TestCase
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

    public function opinion_can_be_created(): void
    {
        $opinion = Opinions::factory()->create();

        $this->assertDatabaseHas('users', [
            'date' => $opinion->date,
            'description' => $opinion->description,
            'rating' => $opinion->rating
        ]);
    }

    public function opinion_can_be_delated(): void
    {
        $opinion = Opinions::factory()->create();
 
        $opinion->delete();
        
        $this->assertModelMissing($opinion);
    }

    public function opinion_can_be_edited(): void
    {
        $opinion = Opinions::factory()->create();

        $this->assertDatabaseHas('users', [
            'date' => $opinion->date,
            'description' => $opinion->description,
            'rating' => $opinion->rating
        ]);

        $opinion->price = 1500;
  
        $this->assertDatabaseHas('home_owner', [
            'name' => "newName",
        ]);
        
    }
}
