<?php

namespace Victoire\Widget\LocaleSwitcherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetLocaleSwitcher.
 *
 * @ORM\Table("vic_widget_localeswitcher")
 * @ORM\Entity
 */
class WidgetLocaleSwitcher extends Widget
{
    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent.
     *
     * @return string
     */
    public function __toString()
    {
        return 'LocaleSwitcher #'.$this->id;
    }
}
