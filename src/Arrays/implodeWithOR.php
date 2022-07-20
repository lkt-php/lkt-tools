<?php

namespace Lkt\Tools\Arrays;

/**
 * @param array $data
 * @return string
 */
function implodeWithOR(array $data): string
{
    return trim(implode(' OR ', $data));
}