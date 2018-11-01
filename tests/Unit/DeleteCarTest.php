<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDelCar()
    {
        $findcar = Cars::find(15);
        $findcar->delete();
        $car = Cars::all();
        $this->assertDatabaseMissing('cars', ["id" => $findcar->id]);
    }
}
