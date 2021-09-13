<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testShowPosts()
    {
        User::factory(5)
            ->times(5)
            ->create();


        $this->assertDatabaseCount('users', 5);
    }
}
