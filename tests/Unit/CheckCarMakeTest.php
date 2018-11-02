<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $randcar = Cars::inRandomOrder()->first();
        $carmake=$randcar->make;
        $this->assertContains($carmake,['ford','toyota','honda']);
    }
}
