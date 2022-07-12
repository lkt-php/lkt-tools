<?php

/**
 * @param string $path
 * @return string
 */
function trimPath(string $path): string
{
    return '/' . rtrim(ltrim(trim($path), '/'), '/');
}