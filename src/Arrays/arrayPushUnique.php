<?php

namespace Lkt\Tools\Arrays;

/**
 * @param array $array
 * @param $data
 * @return void
 */
function arrayPushUnique(array &$array, $data)
{
    if (!in_array($data, $array, true)) {
        $array[] = $data;
    }
}