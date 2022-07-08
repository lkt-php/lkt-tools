<?php

namespace Lkt\Tools\Pagination;

/**
 * @param int $amountOfItems
 * @param int $itemsPerPage
 * @return int
 */
function getTotalPages(int $amountOfItems, int $itemsPerPage): int
{
    return (int)ceil($amountOfItems / $itemsPerPage);
}