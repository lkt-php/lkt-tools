<?php

namespace Lkt\Tools\Strings;

/**
 * @param string $str
 * @return string
 */
function toUTF8(string $str = ''): string
{
    return \htmlentities($str, ENT_QUOTES, 'utf-8');
}