<?php

namespace Lkt\Tools\Strings;

/**
 * @param string $str
 * @return string
 */
function brToNl(string $str = ''): string
{
    return \trim(\str_ireplace(['<br />', '<br>', '<br/>'], "\n", $str));
}