<?php

namespace Lkt\Tools\Parse;

/**
 * @param string $str
 * @param string $default
 * @return string
 */
function ensureStringFilled(string $str, string $default = ''): string
{
    if ($str === ''){
        return $default;
    }
    return $str;
}