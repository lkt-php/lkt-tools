<?php

namespace Lkt\Tools\Parse;

/**
 * @param $datum
 * @return string
 */
function clearInputKeys($datum): string
{
    return trim(implode(';', $datum));
}