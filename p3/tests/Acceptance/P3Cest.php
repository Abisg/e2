<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class P3Cest
{
    // tests
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=second-word]', 'develop');
        $I->click('[test=submit-btn]');
        $I->seeElement('[test=answer-div]');

        $correct = $I->grabTextFrom('[test=outcome]');
        $I->comment('The correct word was: ' . $correct);

        if($correct == 'develop') {
            $I->seeElement('[test=won-outcome]');
        } else {
            $I->seeElement('[test=lost-outcome]');
        }
    }

    public function showsHistoryAndRoundDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);

        $timestamp = $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);
    }

    public function validateForm(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('[test=submit-btn]');
        $I->seeElement('[test=validation-outcome]');
    }
}