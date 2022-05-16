<?php

namespace Lkt\Tools\Debug;

/**
 * @param $data
 * @return void
 */
function show($data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}