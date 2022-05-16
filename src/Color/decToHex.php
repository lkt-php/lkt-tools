<?php

namespace Lkt\Tools\Color;

/**
 * @param array $color
 * @return string|null
 */
function decToHex(array $color): ?string
{
    if (count($color) === 3) {
        $r = dechex($color[0]);
        $g = dechex($color[1]);
        $b = dechex($color[2]);
        return "#{$r}{$g}{$b}";
    }

    return null;
}