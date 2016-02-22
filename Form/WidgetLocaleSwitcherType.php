<?php

namespace Victoire\Widget\LocaleSwitcherBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetLocaleSwitcher form type.
 */
class WidgetLocaleSwitcherType extends WidgetType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\LocaleSwitcherBundle\Entity\WidgetLocaleSwitcher',
            'widget'             => 'LocaleSwitcher',
            'translation_domain' => 'victoire',
        ]);
    }
}
