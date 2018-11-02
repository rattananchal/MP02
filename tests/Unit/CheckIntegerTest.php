<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckIntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testcheckint()
    {
        $randcar = Cars::inRandomOrder()->first();
        $year = (int)$randcar->year;
        $this->assertInternalType("int", $year);
    }
}
