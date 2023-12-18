<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class IndexPageCest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->see('Welcome!');




    }
}