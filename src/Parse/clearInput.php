<?php

namespace Lkt\Tools\Parse;

/**
 * @param $value
 * @return string
 */
function clearInput($value): string
{
    return addslashes(stripslashes(trim($value)));
}