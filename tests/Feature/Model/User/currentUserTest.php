<?php

namespace Tests\Feature\Model\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class currentUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_givenEventMaxUsers_whenCurrentUserEqualsMaxUser_thenUserCantSubsribe()
    {
        //given 
        $event = Event::factory()->create( ['max_users'=>2, 'current_users' =>2]);
        $user = User::factory()->create();
      
        //when (el currentuser es igual al max user)
        $user->joinEvent()->attach($event->id);

        
        //then (el usueario no puede hacer jointevent)

       $this->assertEquals(2, $event->current_users);
    }
}
