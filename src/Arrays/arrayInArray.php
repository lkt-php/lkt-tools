<?php

/**
 * @param array $haystack
 * @param array $needle
 * @return bool
 */
function arrayInArray(array $haystack = [], array $needle = []): bool
{
    foreach ($haystack as $value) {
        if ($value === $needle) {
            return true;
        }
    }
    return false;
}