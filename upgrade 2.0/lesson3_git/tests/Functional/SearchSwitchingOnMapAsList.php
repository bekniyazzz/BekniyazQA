<?php


namespace Functional;

use Tests\Support\FunctionalTester;

class SearchSwitchingOnMapAsList
{
    public function checkSearchSwitchingAsList(FunctionalTester $I): void
    {
        $I->amOnPage('');
        $I->seeElement('body > header > div.container > div.secondary-navbar > nav > ul > li:nth-child(1) > a');
        $I->click('body > header > div.container > div.secondary-navbar > nav > ul > li:nth-child(1) > a');
        $I->seeElement('#search-form > div.search-block-submit > button.kr-btn.kr-btn--medium.search-btn-main.map-search');

        codecept_debug($I->grabTextFrom('#search-form > div.search-block-submit > button.kr-btn.kr-btn--medium.search-btn-main.map-search'));

        $I->click('#search-form > div.search-block-submit > button.kr-btn.kr-btn--medium.search-btn-main.map-search');
        $I->seeElement('#a-search-form > div.submit-wrapper > div > div.col-xs-3.col-sm-4.search-form-bottom-right > div > a.kr-btn.link-show-as-list');
    }
}
