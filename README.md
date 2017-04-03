[![CircleCI](https://circleci.com/gh/Victoire/WidgetLocaleswitcherBundle.svg?style=shield)](https://circleci.com/gh/Victoire/WidgetLocaleswitcherBundle)

Victoire LocaleSwitcher Bundle
============

## What is the purpose of this bundle

This bundles gives you access to the *LocaleSwitcher Widget* which enables a language switcher on your website.

## Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/doc/setup.md)*

## Install the bundle

    php composer.phar require victoire/localeswitcher-bundle

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\LocaleSwitcherBundle\VictoireWidgetLocaleSwitcherBundle(),
            );

            return $bundles;
        }
    }

## Add some extra localized links in the locale switcher

Sometimes, for example for a large company with some subsidiaries which aren't manage by this website, we would like to add extra localized links in the locale switcher.

Just add some config to get things done:
```
#config.yml
victoire_widget_locale_switcher:
    extraLocalizedLinks:
        jp: http://google.jp/
        us: https://google.us/
        ca: https://google.ca/
        pl: http://google.pl/
        ...
```

You can have the complete list of managed countries in `Resources/public/images/flags`.
