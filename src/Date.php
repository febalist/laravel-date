<?php

namespace Febalist\Laravel\Date;

use BadMethodCallException;
use Febalist\Calendar\Calendar;
use Jenssegers\Date\Date as JenssegersDate;

/** @mixin Calendar */
class Date extends JenssegersDate
{
    public function __call($method, $parameters)
    {
        try {
            return parent::__call($method, $parameters);
        } catch (BadMethodCallException $exception) {
            $calendar = new Calendar($this);
            return $calendar->$method(...$parameters);
        }
    }
}
