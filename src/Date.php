<?php

namespace Febalist\Laravel\Date;

use Febalist\Calendar\Calendar;
use Jenssegers\Date\Date as JenssegersDate;

/** @mixin JenssegersDate */
class Date extends Calendar
{
    public function ago($since = null, $syntax = null, $short = false, $parts = 1, $options = null)
    {
        return $this->jenssegers()->ago($since, $syntax, $short, $parts, $options);
    }

    public function until($since = null, $syntax = null, $short = false, $parts = 1, $options = null)
    {
        return $this->jenssegers()->until($since, $syntax, $short, $parts, $options);
    }

    public function format($format)
    {
        return $this->jenssegers()->format($format);
    }

    public function timespan($time = null, $timezone = null)
    {
        return $this->jenssegers()->timespan($time, $timezone);
    }

    /** @return JenssegersDate */
    protected function jenssegers()
    {
        return new JenssegersDate($this->toDateTimeString(), $this->getTimezone());
    }
}
