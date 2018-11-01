<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDelete()
    {
        $finduser = User::find(37);
        $finduser->delete();
        $users = User::all();
        $this->assertDatabaseMissing('users', ["name" => $finduser->name]);
    }
}
