<?php

namespace Lkt\Tools\Arrays;

/**
 * @param array $data
 * @return string
 */
function implodeWithAND(array $data): string
{
    return trim(implode(' AND ', $data));
}