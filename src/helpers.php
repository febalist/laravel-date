<?php

namespace Febalist\Laravel\Date;

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
