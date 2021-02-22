<?php


namespace Lkt\Tools;


class DebugTools
{
    /**
     * @param $data
     */
    public static function show($data): void
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }


    /**
     * @return null
     */
    public static function getCalledClass()
    {
        $bt = debug_backtrace();
        $l = count($bt) - 1;
        $matches = array();

        while (empty($matches) && $l > -1) {
            $lines = file($bt[$l]['file']);
            $callerLine = $lines[$bt[$l]['line'] - 1];
            preg_match('/([a-zA-Z0-9\_]+)::' . $bt[$l--]['function'] . '/', $callerLine, $matches);
        }

        if (!isset($matches[1])) {
            $matches[1] = null;
        }

        if ($matches[1] === 'self') {
            $line = $bt[$l]['line'] - 1;
            while ($line > 0 && strpos($lines[$line], 'class') === false) {
                $line--;
            }
            preg_match('/class[\s]+(.+?)[\s]+/si', $lines[$line], $matches);
        }
        return $matches[1];
    }
}