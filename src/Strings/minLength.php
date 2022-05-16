<?php

namespace Lkt\Tools\Strings;

/**
 * @param string $str
 * @param int $l
 * @return bool
 */
function minLength(string $str, int $l): bool
{
    return strlen(trim($str)) >= $l;
}