<?php

namespace Lkt\Tools\Time;

/**
 * @param string $format
 * @return false|string
 */
function yesterday(string $format) {
    return date($format, strtotime('-1 days'));
}