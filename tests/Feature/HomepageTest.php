<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/cache-event');

        $response->assertStatus(200);
    }
    public function test_url_present_or_not(){

        $response = $this->get('/users');

        $response->assertStatus(200);
    }
}
