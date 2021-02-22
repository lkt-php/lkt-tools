<?php


namespace Lkt\Tools;

/**
 * Class ColorTools
 * @package Lkt\Tools
 */
class ColorTools
{
    /**
     * @param string $color
     * @return array|null
     */
    public static function hexToDec(string $color): ?array
    {
        $color = str_replace('#', '', $color);
        $l = strlen($color);
        if ($l === 3) {
            $r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
            $g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
            $b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));

        } elseif ($l === 6) {
            $r = hexdec(substr($color, 0, 2));
            $g = hexdec(substr($color, 2, 2));
            $b = hexdec(substr($color, 4, 2));

        } else {
            return null;
        }

        return [$r, $g, $b];
    }

    /**
     * @param array $color
     * @return string|null
     */
    public static function decToHex(array $color): ?string
    {
        if (count($color) === 3) {
            $r = dechex($color[0]);
            $g = dechex($color[1]);
            $b = dechex($color[2]);
            return "#{$r}{$g}{$b}";
        }

        return null;
    }
}