<?php

namespace Lkt\Tools\Tests;

use PHPUnit\Framework\TestCase;
use function Lkt\Tools\Pagination\getTotalPages;

class PaginationTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetTotalPages()
    {
        $this->assertEquals(2, getTotalPages(10, 5));
        $this->assertEquals(2, getTotalPages(9, 5));
        $this->assertEquals(3, getTotalPages(11, 5));
    }
}