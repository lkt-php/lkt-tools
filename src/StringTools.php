<?php


namespace Lkt\Tools;

/**
 * Class StringTools
 * @package Lkt\Tools
 * @deprecated
 */
class StringTools
{
    /**
     * @param string $str
     * @return string
     * @deprecated
     */
    public static function toUTF8(string $str = ''): string
    {
        return \htmlentities($str, ENT_QUOTES, 'utf-8');
    }

    /**
     * @param string $str
     * @return string
     * @deprecated
     */
    public static function toAscii(string $str = ''): string
    {
        $str = \str_replace(array('º', 'ª'), '', $str);
        return \utf8_encode(\strtr(\utf8_decode($str),
            \utf8_decode(
                'ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
            'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy'));
    }

    /**
     * @param string $str
     * @return string
     * @deprecated
     */
    public static function removeWhiteSpaces(string $str = ''): string
    {
        return preg_replace('/\s+/', '', $str);
    }

    /**
     * @param string $str
     * @return string
     * @deprecated
     */
    public static function brToNl(string $str = '')
    {
        return \trim(\str_ireplace(['<br />', '<br>', '<br/>'], "\n", $str));
    }

    /**
     * @param string $string
     * @param string $delimiter
     * @return string
     * @deprecated
     */
    public static function convertToCamelCase(string $str = '', $delimiter = '-')
    {
        if (strpos($str, $delimiter) === false) {
            return $str;
        }
        $values = explode($delimiter, $str);
        $r = [];
        foreach ($values as $i => $value) {
            if ($i > 0) {
                $r[] = ucfirst(strtolower($value));
            } else {
                $r[] = strtolower($value);

            }
        }
        return implode('', $r);
    }
}