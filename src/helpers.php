<?php

namespace Febalist\Laravel\Date;

use Dater\Dater;
use Dater\Locale\En;

if (!function_exists('carbon')) {
    /** @return Date */
    function carbon($date = null)
    {
        if (is_numeric($date)) {
            return Date::createFromTimestamp($date);
        }

        return Date::parse($date);
    }
}

if (!function_exists('dater')) {
    /**
     * @return Dater
     */
    function dater()
    {
        static $dater;

        if (!$dater) {
            $locale = ucfirst(app()->getLocale());
            $class = "Dater\\Locale\\$locale";
            if (!class_exists($class)) {
                $class = En::class;
            }
            $dater = new Dater(new $class);
        }

        return $dater;
    }
}
