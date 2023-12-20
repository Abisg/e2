# Project 3
+ By: *Abigail Simpson-Givens*
+ URL: <http://e2p3.abihes.me>

## Graduate requirement
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
+ _[Logo](https://www.ctpublic.org/game/word-encounters)_
+ _[Button background transition](https://stackoverflow.com/questions/4411306/transition-of-background-color)_
+ _[Codeception](https://codeception.com/docs/AcceptanceTests)_
+ _[Migrations & Seeding](https://laravel.com/docs/4.2/migrations)_
+ _[Integer Datatype](https://www.dofactory.com/sql/int)_

## Notes for instructor
+ Thanks for a great semester! 

## Codeception testing output
```
Codeception PHP Testing Framework v5.0.12 https://stand-with-ukraine.pp.ua

Tests.Acceptance Tests (3) --------------------------------------------
P3Cest: Play game
Signature: Tests\Acceptance\P3Cest:playGame
Test: tests/Acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=second-word]","develop"
 I click "[test=submit-btn]"
 I see element "[test=answer-div]"
 I grab text from "[test=outcome]"
 The correct word was: environment.
 I see element "[test=lost-outcome]"
 PASSED 

P3Cest: Shows history and round details
Signature: Tests\Acceptance\P3Cest:showsHistoryAndRoundDetails
Test: tests/Acceptance/P3Cest.php:showsHistoryAndRoundDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,68
 I grab text from "[test=round-link]"
 I click "2023-12-19 22:33:07"
 I see "2023-12-19 22:33:07"
 PASSED 

P3Cest: Validate form
Signature: Tests\Acceptance\P3Cest:validateForm
Test: tests/Acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-btn]"
 I see element "[test=validation-outcome]"
 PASSED 

-----------------------------------------------------------------------
Time: 00:00.201, Memory: 12.00 MB

OK (3 tests, 6 assertions)
```