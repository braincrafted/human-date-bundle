<?php

/**
 * HumanDateTransformer
 *
 * @category   Transformer
 * @package    BraincraftedHumanDateBundle
 * @subpackage Transformer
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 */

namespace Braincrafted\HumanDateBundle\Tests\Transformer;

use Braincrafted\HumanDateBundle\Transformer\HumanDateTransformer;

/**
 * HumanDateTransformer
 *
 * @category   Transformer
 * @package    BraincraftedHumanDateBundle
 * @subpackage Transformer
 * @author     Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/braincrafted/human-date-bundle BraincraftedHumanDateBundle
 *
 * @group unit
 */
class HumanDateTransformerTest extends \PHPUnit_Framework_TestCase
{
    /** @var HumanDateTransformer */
    protected $t;

    public function setUp()
    {
        $this->t = new HumanDateTransformer();
    }

    /**
     * @covers Braincrafted\HumanDateBundle\HumanDate::transform
     */
    public function testTransform()
    {
        $nextYear = date('Y')+1;
        $prevYear = date('Y')-1;
        $thisYear = date('Y');

        $this->assertEquals('Today', $this->t->transform(new \DateTime('now')));
        $this->assertEquals('Yesterday', $this->t->transform(new \DateTime('-1 day')));
        $this->assertEquals('Tomorrow', $this->t->transform(new \DateTime('+1 day')));

        $d = new \DateTime('+3 days');
        $this->assertEquals('Next ' . $d->format('l'), $this->t->transform(new \DateTime('+3 days')));
        $d = new \DateTime('-3 days');
        $this->assertEquals('Last ' . $d->format('l'), $this->t->transform(new \DateTime('-3 days')));

        $d = new \DateTime('+30 days');
        $this->assertEquals($d->format('F j'), $this->t->transform(new \DateTime('+30 days')));
        $d = new \DateTime('-30 days');
        $this->assertEquals($d->format('F j'), $this->t->transform(new \DateTime('-30 days')));

        $this->assertEquals('March 31, ' . $nextYear, $this->t->transform(new \Datetime($nextYear . '-03-31')));
        $this->assertEquals('March 31, ' . $prevYear, $this->t->transform(new \DateTime($prevYear . '-03-31')));
    }
}