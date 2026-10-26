<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_admin_pages_are_namespaced_and_use_the_admin_layout(): void
    {
        foreach (['/admin', '/admin/table', '/admin/ecommerce', '/admin/charts'] as $path) {
            $this->get($path)
                ->assertOk()
                ->assertSee('admin/assets/css/style.css')
                ->assertDontSee('landing/css/style.css');
        }
    }

    public function test_landing_pages_keep_the_landing_layout(): void
    {
        foreach (['/', '/movie'] as $path) {
            $this->get($path)
                ->assertOk()
                ->assertSee('landing/css/style.css')
                ->assertDontSee('admin/assets/css/style.css')
                ->assertDontSee('Apex Charts');
        }
    }

    public function test_admin_subpages_are_not_available_at_the_old_root_paths(): void
    {
        foreach (['/table', '/ecommerce', '/charts'] as $path) {
            $this->get($path)->assertNotFound();
        }
    }
}
