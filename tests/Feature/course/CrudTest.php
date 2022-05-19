<?php

namespace Tests\Feature;

use App\Models\Course;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudTest extends TestCase
{
    use RefreshDatabase;
    public function test_if_view_welcome_page()
    {
        $this->withoutExceptionHandling();

        Course::all();

        $response = $this->get('/');
        $response->assertStatus(200)->assertViewIs('welcome');
    }
}