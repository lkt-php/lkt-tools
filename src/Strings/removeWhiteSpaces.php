<?php

namespace Lkt\Tools\Strings;

/**
 * @param string $str
 * @return string
 */
function removeWhiteSpaces(string $str = ''): string
{
    return preg_replace('/\s+/', '', $str);
}