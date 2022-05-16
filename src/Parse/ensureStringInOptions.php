<?php

namespace Lkt\Tools\Parse;

/**
 * @param string $str
 * @param array $opts
 * @param int $defaultIndex
 * @return string
 */
function ensureStringInOptions(string $str, array $opts, int $defaultIndex = 0): string
{
    if (in_array($str, $opts, true)){
        return $str;
    }
    return $opts[$defaultIndex];
}