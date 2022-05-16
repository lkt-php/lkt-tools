<?php

namespace Lkt\Tools;

/**
 * Class ArrayTools
 * @package Lkt\Tools
 * @deprecated
 */
class ArrayTools
{
    /**
     * @param array $a
     * @return float|int
     * @deprecated
     */
    public static function arrayAverage(array $a)
    {
        return array_sum($a) / count($a);
    }

    /**
     * @param array $array
     * @return array
     * @deprecated
     */
    public static function arrayValuesRecursive(array $array = [])
    {
        $r = [];

        foreach ($array as $value) {
            if (is_array($value)) {
                $r = array_merge($r, self::arrayValuesRecursive($value));
            } else {
                $r[] = $value;
            }
        }
        return $r;
    }

    /**
     * @param array $array
     * @param string $divider
     * @param array $parentKeys
     * @return array
     * @deprecated
     */
    public static function arrayValuesRecursiveWithKeys(array $array = [], string $divider = '.', array $parentKeys = [])
    {
        $r = [];

        foreach ($array as $key => $value) {
            $t = array_merge($parentKeys, [$key]);
            if (is_array($value)) {
                $r = array_merge($r, self::arrayValuesRecursiveWithKeys($value, $divider, $t));
            } else {
                $k = implode($divider, $t);
                $r[$k] = $value;
            }
        }
        return $r;
    }

    /**
     * @param array $arr
     * @return mixed
     * @deprecated
     */
    public static function getArrayFirstPosition(array $arr = [])
    {
        return $arr[array_keys($arr)[0]];
    }

    /**
     * @param array $haystack
     * @param array $needle
     * @return bool
     * @deprecated
     */
    public static function checkIfArrayInArray(array $haystack = [], array $needle = [])
    {
        foreach ($haystack as $value) {
            if ($value === $needle) {
                return true;
            }
        }
        return false;
    }
}