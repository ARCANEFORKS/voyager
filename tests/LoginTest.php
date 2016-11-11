<?php

namespace TCG\Voyager\Tests;

class LoginTest extends TestCase
{
    /** @test */
    public function it_can_login()
    {
        $this->visitRoute('voyager.login');
        $this->type('admin@admin.com', 'email');
        $this->type('password', 'password');
        $this->press('Login Logging in');
        $this->seePageIs(route('voyager.dashboard'));
    }
}
