<?php
namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * Test successful login.
     * @group Login
     */
    public function testSuccessfulLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.1:8000/login')
                    ->type('email', 'daffa@gmail.com') 
                    ->type('password', '1202223066') 
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee('Dashboard');
        });
    }
}
