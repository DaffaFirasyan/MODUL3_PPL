<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class CreateNotesTest extends DuskTestCase
{   
    /**
     * Test creating a new note.
     * @group CreateNotes
     */
    public function testCreateNote(): void
    {
        $this->browse(function (Browser $browser) {
            $user = \App\Models\User::find(1); 
            
            $browser->loginAs($user)
                ->visit('/notes')
                ->assertPathIs('/notes')
                ->clickLink('Create Note')
                ->assertPathIs('/create-note')
                ->type('title', 'Daffa')
                ->type('description', '1202223066') 
                ->press('CREATE');
        });
    }
}
