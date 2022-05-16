<?php

namespace Lkt\Tools\Arrays;

/**
 * @param array $a
 * @return float|int
 */
function arrayAverage(array $a)
{
    return array_sum($a) / count($a);
}