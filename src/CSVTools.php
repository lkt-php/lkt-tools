<?php


namespace Lkt\Tools;

/**
 * Class CSVTools
 * @package Lkt\Tools
 */
class CSVTools
{
    /**
     * @param string $path
     * @return array
     */
    function csvToArray($path = '')
    {
        $r = $fields = [];
        $i = 0;
        $handle = @fopen($path, 'r');
        if ($handle) {
            while (($row = fgetcsv($handle, 4096)) !== false) {
                if (empty($fields)) {
                    $fields = $row;
                    continue;
                }
                foreach ($row as $k => $value) {
                    $r[$i][$fields[$k]] = $value;
                }
                $i++;
            }
            if (!feof($handle)) {
                echo "Error: unexpected fgets() fail\n";
            }
            fclose($handle);
        }
        return $r;
    }
}