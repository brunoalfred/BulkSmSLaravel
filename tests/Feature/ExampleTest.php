<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_welcome_view_can_be_rendered()
    {
        $view = $this->view('class_representatives.fields', ['first_name' => 'Taylor']);

        $view->assertSee('Taylor');
    }
}
