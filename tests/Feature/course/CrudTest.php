<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use phpDocumentor\Reflection\Types\This;

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

   
  public function test_course_can_be_delete_if_user_is_admin() {
    $this->withExceptionHandling();

    $userAdmin = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($userAdmin);

    $course = Course::factory()->create();
    $this->assertCount(1, Course::all());

    $response = $this->delete(route('courses.delete', $course->id));
    $this->assertCount(0, Course::all());
  }
}