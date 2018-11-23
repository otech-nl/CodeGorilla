<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AnimalTest extends DuskTestCase
{
    /**
     * Test landing page.
     *
     * @return void
     */
    public function testDierentuin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('dierentuin');
        });
    }

    /**
     * Test dieren page.
     *
     * @return void
     */
    public function testDieren()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/animals')
                    ->assertSee('gorilla');
        });
    }
}
