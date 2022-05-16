<?php

namespace Lkt\Tools\Strings;

/**
 * @param string $str
 * @param string $delimiter
 * @return string
 */
function toCamelCase(string $str = '', string $delimiter = '-'): string
{
    if (strpos($str, $delimiter) === false) {
        return $str;
    }
    $values = explode($delimiter, $str);
    $r = [];
    foreach ($values as $i => $value) {
        if ($i > 0) {
            $r[] = ucfirst(strtolower($value));
        } else {
            $r[] = strtolower($value);

        }
    }
    return implode('', $r);
}