<?php

/**
 * HumanDateExtension
 *
 * @category   TwigExtension
 * @package    BraincraftedHumanDateBundle
 * @subpackage Twig
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 */

namespace Braincrafted\HumanDateBundle\Twig;

use Twig_Extension;
use Twig_Filter_Method;

use Braincrafted\HumanDateBundle\Transformer\HumanDateTransformer;

/**
 * HumanDateExtension
 *
 * @category   TwigExtension
 * @package    BraincraftedHumanDateBundle
 * @subpackage Twig
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 */
class HumanDateExtension extends Twig_Extension
{
    public function getFilters()
    {
        return array(
            'humanDate' => new Twig_Filter_Method($this, 'humanDateFilter'),
        );
    }

    public function humanDateFilter(\DateTime $date)
    {
        $transformer = new HumanDateTransformer();
        return $transformer->transform($date);
    }

    public function getName()
    {
        return 'human_date_extension';
    }
}
