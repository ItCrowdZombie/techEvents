<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_ifUserIsntAdminCantAccesDashboard() {

        //given
        $user = User::factory()->create();
        //when
        $response = $this->actingAs($user)->get(route('dashboard'));
        // dd($response);
        //then
        $response->assertRedirect(route('landing'));
    }

    public function test_ifUserIsAdminCanAccesDashboard() {

        //given
        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        //when
        $response = $this->actingAs($userAdmin)->get(route('dashboard'));
        // dd($response);
        //then
        $response->assertViewIs('dashboard');
    }
}
