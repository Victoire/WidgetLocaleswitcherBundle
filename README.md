Victoire CMS LocaleSwitcher Bundle
============

Need to add a localeswitcher in a victoire cms website ?
Get this localeswitcher bundle and so on

First you need to have a valid Symfony2 Victoire edition.
Then you just have to run the following composer command :

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
