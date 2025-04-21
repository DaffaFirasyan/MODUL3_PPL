<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LogoutTest extends DuskTestCase
{
    /**
     * Test logging out of the application.
     * @group Logout
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1);
            $browser->loginAs($user)
                    ->visit('/dashboard')
                    ->assertSee('Dashboard')
                    ->click('@user-dropdown') 
                    ->click('@logout-button') 
                    ->assertPathIs('/');
        });
    }
}