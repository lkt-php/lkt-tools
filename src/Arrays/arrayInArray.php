<?php

function arrayInArray(array $haystack = [], array $needle = [])
{
    foreach ($haystack as $value) {
        if ($value === $needle) {
            return true;
        }
    }
    return false;
}