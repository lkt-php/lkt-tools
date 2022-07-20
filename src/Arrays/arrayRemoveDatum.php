<?php

namespace Lkt\Tools\Arrays;

function arrayRemoveDatum(array &$haystack, string $needle)
{
    $i = array_search($needle, $haystack, true);
    if ($i){
        unset($haystack[$i]);

        if (is_numeric($i)) {
            $haystack = array_values($haystack);
        }
    }
}