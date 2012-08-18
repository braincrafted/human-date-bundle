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


namespace Braincrafted\HumanDateBundle\Transformer;

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
class HumanDateTransformer
{
    /**
     * Transforms the given DateTime object into a more human format.
     *
     * @param \DateTime $date The date
     *
     * @return string The human readable format of the date
     */
    public function transform(\DateTime $date)
    {
        $current = new \DateTime('now');

        if ($this->isToday($date)) {
            return 'Today';
        }

        if ($this->isYesterday($date)) {
            return 'Yesterday';
        }

        if ($this->isTomorrow($date)) {
            return 'Tomorrow';
        }

        if ($this->isNextWeek($date)) {
            return sprintf('Next %s', $date->format('l'));
        }

        if ($this->isLastWeek($date)) {
            return sprintf('Last %s', $date->format('l'));
        }

        if ($this->isThisYear($date)) {
            return $date->format('F j');
        }

        return $date->format('F j, Y');
    }

    protected function isToday(\DateTime $date)
    {
        $today = new \DateTime('now');
        $start = new \DateTime($today->format('Y-m-d') . ' 00:00:00');
        $end   = new \DateTime($today->format('Y-m-d') . ' 23:59:59');

        if ($date->getTimestamp() >= $start->getTimestamp() && $date->getTimestamp() <= $end->getTimestamp()) {
            return true;
        }
        return false;
    }

    protected function isTomorrow(\DateTime $date)
    {
        $tomorrow = new \DateTime('+1 day');
        $start = new \DateTime($tomorrow->format('Y-m-d') . ' 00:00:00');
        $end   = new \DateTime($tomorrow->format('Y-m-d') . ' 23:59:59');

        if ($date->getTimestamp() >= $start->getTimestamp() && $date->getTimestamp() <= $end->getTimestamp()) {
            return true;
        }
        return false;
    }

    protected function isYesterday(\DateTime $date)
    {
        $yesterday = new \DateTime('-1 day');
        $start = new \DateTime($yesterday->format('Y-m-d') . ' 00:00:00');
        $end   = new \DateTime($yesterday->format('Y-m-d') . ' 23:59:59');

        if ($date->getTimestamp() >= $start->getTimestamp() && $date->getTimestamp() <= $end->getTimestamp()) {
            return true;
        }
        return false;
    }

    protected function isNextWeek(\DateTime $date)
    {
        $week = new \DateTime('+7 days');

        if ($date->getTimestamp() >= time() && $date->getTimestamp() <= $week->getTimestamp()) {
            return true;
        }
        return false;
    }

    protected function isLastWeek(\DateTime $date)
    {
        $week = new \DateTime('-7 days');

        if ($date->getTimestamp() <= time() && $date->getTimestamp() >= $week->getTimestamp()) {
            return true;
        }
        return false;
    }

    protected function isThisYear(\DateTime $date)
    {
        if (date('Y') === $date->format('Y')) {
            return true;
        }
        return false;
    }
}
