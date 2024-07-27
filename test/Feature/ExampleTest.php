<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_view_their_profile()
    {
        $user = \App\Models\User::factory()->create();
        
        $response = $this->actingAs($user)->get(route('user.profile', $user->id));
        
        $response->assertStatus(200);
        $response->assertViewIs('user.profile');
    }
    
    // Add more tests as needed
}

