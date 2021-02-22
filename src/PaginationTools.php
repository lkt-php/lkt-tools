<?php

namespace Lkt\Tools;

/**
 * Class PaginationTools
 * @package Lkt\Tools
 */
class PaginationTools
{
    /**
     * @param int $amountOfItems
     * @param int $itemsPerPage
     * @return int
     */
    public static function getTotalPages(int $amountOfItems, int $itemsPerPage): int
    {
        return (int)ceil($amountOfItems / $itemsPerPage);
    }
}