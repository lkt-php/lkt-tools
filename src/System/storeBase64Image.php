<?php

namespace Lkt\Tools\System;

/**
 * @param string $base64String
 * @param string $dir
 * @param string $name
 * @return array
 */
function storeBase64Image(string $base64String, string $dir, string $name): array
{
    $parts = explode(';base64,', $base64String);
    $content = $parts[1];
    $extension = explode('data:image/', $parts[0])[1];
    $fileName = "{$name}.{$extension}";
    file_put_contents("{$dir}/{$fileName}", base64_decode($content));
    chmod("{$dir}/{$fileName}", 0777);
    return [
        'status' => true,
        'extension' => $extension,
        'fileName' => $fileName,
    ];
}