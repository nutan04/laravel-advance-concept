<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }


    public function test_new_users_can_register()
    {
        $response = $this->post('/api/auth/register', [
            'name' => 'New User',
            'email' => 'newton@example.com',
            'password' => 'Nutan@04'
        ]);

        // $response->assertAuthenticated();
        $response->assertStatus(201);
        // $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/api/auth/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
