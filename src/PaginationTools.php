<?php

namespace Lkt\Tools;

/**
 * Class PaginationTools
 * @package Lkt\Tools
 * @deprecated
 */
class PaginationTools
{
    /**
     * @param int $amountOfItems
     * @param int $itemsPerPage
     * @return int
     * @deprecated
     */
    public static function getTotalPages(int $amountOfItems, int $itemsPerPage): int
    {
        return (int)ceil($amountOfItems / $itemsPerPage);
    }
}