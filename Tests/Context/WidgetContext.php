<?php

namespace Victoire\Widget\LocaleSwitcherBundle\Tests\Context;

use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Knp\FriendlyContexts\Context\RawMinkContext;

class WidgetContext extends RawMinkContext
{
    /**
     * @When /^I change locale to "(.+)" in LocaleSwitcher$/
     */
    public function iChangeLocaleToInLocaleSwitcher($locale)
    {
        $page = $this->getSession()->getPage();

        $button = $page->find('xpath', sprintf(
            'descendant-or-self::div[contains(@class, "localeSwitcher")]/button[@data-toggle="dropdown"]',
            $locale
        ));

        $button->click();

        $link = $page->find('xpath', sprintf(
            'descendant-or-self::div[contains(@class, "localeSwitcher")]/ul[@class="dropdown-menu"]//a[@lang="%s"]',
            $locale
        ));

        if (!$link) {
            throw new \RuntimeException(sprintf(
                'Link for LocalSwitcher locale "%s" could not be found.',
                $locale
            ));
        }

        $link->click();
    }

    /**
     * @Then /^I should see "(.+)" current locale in LocaleSwitcher$/
     */
    public function iShouldSeeCurrentLocaleInLocaleSwitcher($locale)
    {
        $page = $this->getSession()->getPage();

        $flag = $page->find('xpath', sprintf(
            'descendant-or-self::button[@data-toggle="dropdown"]/img[@class="localeSwitcher-flag" and @src="/bundles/victoirewidgetlocaleswitcher/images/flags/%s.png"]',
            $locale
        ));

        if (!$flag) {
            throw new \RuntimeException(sprintf(
                'It seems that current locale is not "%s" in LocaleSwitcher or element could not be found.',
                $locale
            ));
        }
    }
}
