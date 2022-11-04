<?php

namespace Lkt\Tools\Tests;

use PHPUnit\Framework\TestCase;
use function Lkt\Tools\Arrays\arrayAverage;
use function Lkt\Tools\Color\decToHex;
use function Lkt\Tools\Color\hexToDec;

class ColorTest extends TestCase
{
    /**
     * @return void
     */
    public function testDecToHex()
    {
        $this->assertEquals('#ffffff', decToHex([255, 255, 255]));
        $this->assertEquals('#ffff00', decToHex([255, 255, 0]));
    }

    /**
     * @return void
     */
    public function testHexToDex()
    {
        $this->assertEquals([255, 255, 255], hexToDec('#ffffff'));
        $this->assertEquals([255, 255, 255], hexToDec('#fff'));
        $this->assertEquals([255, 255, 0], hexToDec('#ffff00'));
    }
}