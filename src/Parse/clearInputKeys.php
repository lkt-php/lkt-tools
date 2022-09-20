<?php

namespace Lkt\Tools\Parse;

/**
 * @param $datum
 * @return string
 */
function clearInputKeys($datum): string
{
    if (!is_array($datum)) {
        return trim($datum);
    }
    return trim(implode(';', $datum));
}