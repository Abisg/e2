<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductPageCest
{
    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        #All of these are called assertions

        # Act - Directs to a particular page
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct html title on page is set on the page
        #<title>...</title>
        $I->seeInTitle('Driscoll’s Strawberries');

        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');

        # Assert the existence of a certain element on the page
        #Can use an html element, css with an id -> #
        $I->seeElement('.product-thumb');

        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '[test=product-price]');
    }

    public function reviewAProductTest(AcceptanceTester $I)
    {
        $I->amOnPage('/product?sku=driscolls-strawberries');

        $name = 'Bob';
        $I->fillField('[test=reviewer-name-input]', $name);

        $review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';
        $I->fillField('[test=review-textarea]', $review);

        $I->click('[test=review-submit-button]');

        $I->seeElement('[test=review-confirmation]');

        #Confirm we see review on the page
        $I->see($name, '[test=review-name]');
        $I->see($review, '[test=review-content]');

    }
}
