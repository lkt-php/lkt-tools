<?php

namespace Lkt\Tools\Arrays;

/**
 * @param array $arr
 * @return mixed
 */
function getArrayFirstPosition(array $arr = [])
{
    return $arr[array_keys($arr)[0]];
}