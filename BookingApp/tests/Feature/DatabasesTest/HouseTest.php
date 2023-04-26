<?php

namespace Tests\Feature\DatabaseTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\House;

class HouseTest extends TestCase
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

    public function houses_can_be_created(): void
    {
        $house = House::factory()->create();

        $this->assertDatabaseHas('houses', [
            'name' => $house->name,
            'name' => $house->description,
            'name' => $house->address,
            'name' => $house->number_of_rooms,
            'name' => $house->price
        ]);
    }

    public function houses_can_be_delated(): void
    {
        $house = House::factory()->create();
 
        $house->delete();
        
        $this->assertModelMissing($house);
    }

    public function houses_can_be_edited(): void
    {
        $house = House::factory()->create();

        $this->assertDatabaseHas('houses', [
            'name' => $house->name,
            'name' => $house->description,
            'name' => $house->address,
            'name' => $house->number_of_rooms,
            'name' => $house->price
        ]);

        $house->name = "newName";
  
        $this->assertDatabaseHas('houses', [
            'name' => "newName",
        ]);
        
    }
}
