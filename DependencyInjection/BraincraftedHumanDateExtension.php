<?php

/**
 * BraincraftedHumanDateExtension
 *
 * @category   Extension
 * @package    BraincraftedHumanDateBundle
 * @subpackage DependencyInjection
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 */


namespace Braincrafted\HumanDateBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * BraincraftedHumanDateExtension
 *
 * @category   Extension
 * @package    BraincraftedHumanDateBundle
 * @subpackage DependencyInjection
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 */
class BraincraftedHumanDateExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
