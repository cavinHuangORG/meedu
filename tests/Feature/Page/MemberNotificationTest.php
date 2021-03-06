<?php

namespace Tests\Feature\Page;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MemberNotificationTest extends TestCase
{

    public function test_member_notification()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->visit(route('member.messages'))
            ->assertResponseStatus(200);
    }

}
