<?php

namespace Lkt\Tools\Arrays;

/**
 * @param array $array
 * @param string $key
 * @param $data
 * @return void
 */
function arrayKeyPushUnique(array &$array, string $key, $data)
{
    if (!array_key_exists($key, $array)) {
        $array[$key] = $data;
    }
}