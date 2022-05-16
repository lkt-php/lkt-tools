<?php

namespace Lkt\Tools;

use function Lkt\Tools\Requiring\requireFiles;

require_once __DIR__ . '/Requiring/requireFiles.php';

requireFiles([
    __DIR__ . '/Arrays/*.php',
    __DIR__ . '/Color/*.php',
    __DIR__ . '/Csv/*.php',
    __DIR__ . '/Debug/*.php',
    __DIR__ . '/Pagination/*.php',
    __DIR__ . '/Parse/*.php',
    __DIR__ . '/Strings/*.php',
    __DIR__ . '/System/*.php',
    __DIR__ . '/Time/*.php',
    __DIR__ . '/Url/*.php',
    __DIR__ . '/Xml/*.php',
]);