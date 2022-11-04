<?php

/**
 * @param array $haystack
 * @param array $needle
 * @return bool
 */
function arrayInArray(array $haystack = [], array $needle = []): bool
{
    if (in_array($needle, $haystack, true)) {
        return true;
    }
    return false;
}