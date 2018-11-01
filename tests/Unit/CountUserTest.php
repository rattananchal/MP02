<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $allusers = User::all();
        $usercount = $allusers->count();
        $this->assertEquals(50, $usercount);
//        $this->assertTrue($usercount -> 50);
    }
}
