<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class EditNotesTest extends DuskTestCase
{
    /**
     * Test editing an existing note.
     * @group EditNotes
     */
    public function testEditNote(): void
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1); 
            $browser->loginAs($user)
                    ->visit('/notes') 
                    ->clickLink('Edit') 
                    ->assertPathIs('/edit-note-page/2') 
                    ->type('title', 'Daffa Test Update') 
                    ->type('description', 'NIM: 1202223066') 
                    ->press('UPDATE') 
                    ->assertPathIs('/notes') 
                    ->assertSee('Daffa Test Update'); 
        });
    }
}