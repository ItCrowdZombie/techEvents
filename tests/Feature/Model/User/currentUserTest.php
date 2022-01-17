<?php

namespace Tests\Feature\Model\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use Tests\TestCase;

class currentUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_givenEventMaxUsers_whenCurrentUserEqualsMaxUser_thenUserCantSubsribe

    ()
    {
        given 
        when 
        then

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
