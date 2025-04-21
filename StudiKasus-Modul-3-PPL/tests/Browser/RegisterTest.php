<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * Test successful registration.
     * @group Register
     */
    public function testSuccessfulRegistration(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->assertSee('Modul')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Daffa')
                    ->type('email', 'daffa12@gmail.com')
                    ->type('password', '1202223066')
                    ->type('password_confirmation', '1202223066')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}