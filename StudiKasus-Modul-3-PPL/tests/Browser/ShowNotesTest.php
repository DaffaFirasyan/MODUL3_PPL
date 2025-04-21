<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class ShowNotesTest extends DuskTestCase
{
    /**
     * Test editing an existing note.
     * @group ShowNotes
     */
    public function testShowNote(): void
    {
        $this->browse(function (Browser $browser) {
            $user = User::find(1); 
            $browser->loginAs($user)
                    ->visit('/notes')
                    ->assertPathIs('/notes')
                    ->assertSee('cfasffa'); 
        });
    }
}