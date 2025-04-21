<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{

/**
     * Test deleting a note.
     * @group DeleteNotes
     */
    public function testDeleteNote(): void
    {
        $this->browse(function (Browser $browser) {
            $user = \App\Models\User::find(1);  
            $browser->loginAs($user)
                    ->visit('/notes') 
                    ->assertPathIs('/notes')
                    ->Press('Delete');
        });
    }
}