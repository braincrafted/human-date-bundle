<?php

namespace Braincrafted\HumanDateBundle\Twig;

use Twig_Extension;
use Twig_Filter_Method;

use Braincrafted\HumanDateBundle\Transformer\HumanDateTransformer;

class HumanDateExtension extends Twig_Extension
{
    public function getFilters()
    {
        return array(
            'humanDate' => new Twig_Filter_Method($this, 'humanDateFilter'),
        );
    }

    public function humanDate(\DateTime $date)
    {
        $transformer = new HumanDateTransformer();
        return $transformer->transform($date);
    }

    public function getName()
    {
        return 'human_date_extension';
    }
}
