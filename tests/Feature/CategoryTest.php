<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     * 
     */

    use RefreshDatabase;

    private $admin_user;

    // protected function setUp(): void
    // {
    //     $this->admin_user = User::create([
    //         'name' => 'test_user',
    //         'email' => 'admin@example.com',
    //         'password' => '1234'
    //     ]);
    // }
    public function test_it_returns_categories()
    {
        $this->admin_user = User::create([
            'name' => 'test_user',
            'email' => 'admin@example.com',
            'password' => '1234',
            'role' => '1'
        ]);

        $response = $this->actingAs($this->admin_user)->get('/categories');

        $response->assertStatus(200);
    }
}
