<?php

namespace Tests\Feature;

use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReservationTest extends TestCase
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

    public function create(){
        $reservation = Reservation::factory()->create();

        $this->assertDatabaseHas('users', [
            'start_date' => $reservation->start_date,
            'end_date' => $reservation->end_date,
            'price' => $reservation->price
        ]);
    }

    public function reservation_can_be_created(): void
    {
       $this->create();
    }

    public function reservation_can_be_delated(): void
    {
        $reservation = Reservation::factory()->create();
 
        $reservation->delete();
        
        $this->assertModelMissing($reservation);
    }

    public function testGetIndex()
    {
        Event::shouldReceive('fire')->once()->with('foo', ['name' => 'Dayle']);
    
        $this->call('GET', '/');
    }

    public function reservation_can_be_edited(): void
    {
        $this->crete();

        $reservation->price = 1500;
  
        $this->assertDatabaseHas('home_owner', [
            'name' => "newName",
        ]);
        
    }
}
