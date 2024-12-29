<?php


namespace Acceptance;

use Tests\Support\AcceptanceTester;

class ComplexSearch
{
    public function checkKrishaAcceptHomework(AcceptanceTester $I): void
    {
        $I->amOnPage('');
        $I->seeElement('body > header > div.container > div.secondary-navbar > nav > ul > li.is-active > a');
        $I->click('body > header > div.container > div.secondary-navbar > nav > ul > li.is-active > a');
        $I->seeElement('body > main > div.complexes-filter-wrapper > div.complexes-filter > footer > button.cf-footer__toggle-details');
        $I->click('body > main > div.complexes-filter-wrapper > div.complexes-filter > footer > button.cf-footer__toggle-details');
        $I->seeElement('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__main-params > div.cf-dropdown.complexes-filter__main-item.complexes-filter__main-item--region > div');
        $I->click('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__main-params > div.cf-dropdown.complexes-filter__main-item.complexes-filter__main-item--region > div');
        $I->seeElement('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__main-params > div.cf-dropdown.complexes-filter__main-item.complexes-filter__main-item--region > div > div > div.cf-dropdown__options-wrapper > div:nth-child(2) > div:nth-child(1)');
        $I->click('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__main-params > div.cf-dropdown.complexes-filter__main-item.complexes-filter__main-item--region > div > div > div.cf-dropdown__options-wrapper > div:nth-child(2) > div:nth-child(1)');
        $I->seeElement('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__details.complexes-filter__details--opened > div > div:nth-child(10) > div > div > div > span');
        $I->click('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__details.complexes-filter__details--opened > div > div:nth-child(10) > div > div > div > span');
        $I->seeElement('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__details.complexes-filter__details--opened > div > div:nth-child(10) > div > div > div.cf-dropdown__options-wrapper > div.cf-dropdown__search-results > div > input');
        $I->click('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__details.complexes-filter__details--opened > div > div:nth-child(10) > div > div > div.cf-dropdown__options-wrapper > div.cf-dropdown__search-results > div > input');
        $I->fillField('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__details.complexes-filter__details--opened > div > div:nth-child(10) > div > div > div.cf-dropdown__options-wrapper > div.cf-dropdown__search-results > div > input', 'MEREI');
        $I->seeElement('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__details.complexes-filter__details--opened > div > div:nth-child(10) > div > div > div.cf-dropdown__options-wrapper > div.cf-dropdown__search-results.cf-dropdown__search-results--has-results > div.cf-dropdown-item');
        $I->click('body > main > div.complexes-filter-wrapper > div.complexes-filter > div.complexes-filter__details.complexes-filter__details--opened > div > div:nth-child(10) > div > div > div.cf-dropdown__options-wrapper > div.cf-dropdown__search-results.cf-dropdown__search-results--has-results > div.cf-dropdown-item');
        $I->seeElement('body > main > div.complexes-filter-wrapper > div.complexes-filter > footer > div > button.ui-button.ui-button--blue');
        $I->click('body > main > div.complexes-filter-wrapper > div.complexes-filter > footer > div > button.ui-button.ui-button--blue');
        $I->seeElement('body > main > div.complex-cards.complex-cards--search > div > a > div > div.complex-card__content > p.complex-card__title');
    }
}
