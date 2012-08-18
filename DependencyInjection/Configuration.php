<?php

/**
 * Configuration
 *
 * @category   Configuration
 * @package    BraincraftedHumanDateBundle
 * @subpackage DependencyInjection
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 */

namespace Braincrafted\HumanDateBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @category   Configuration
 * @package    BraincraftedHumanDateBundle
 * @subpackage DependencyInjection
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('braincrafted_human_date');

        return $treeBuilder;
    }
}
