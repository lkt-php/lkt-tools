<?php

namespace Lkt\Tools\Parse;

/**
 * @param $number
 * @param $min
 * @param $max
 * @return mixed
 */
function ensureNumberBetween($number, $min, $max)
{
    if ($number > $max) {
        $number = $max;
    }

    if ($number < $min) {
        $number = $min;
    }

    return $number;
}