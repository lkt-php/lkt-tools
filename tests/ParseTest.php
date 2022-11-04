<?php

namespace Lkt\Tools\Tests;

use PHPUnit\Framework\TestCase;
use function Lkt\Tools\Parse\clearInput;
use function Lkt\Tools\Parse\clearInputKeys;
use function Lkt\Tools\Parse\ensureNumberBetween;
use function Lkt\Tools\Parse\ensureStringFilled;
use function Lkt\Tools\Parse\ensureStringInOptions;
use function Lkt\Tools\Parse\explodeInputKeys;

class ParseTest extends TestCase
{
    /**
     * @return void
     */
    public function testClearInput()
    {
        $this->assertEquals('Hello world', clearInput('Hello world'));
        $this->assertEquals('Hello world', clearInput('\Hello world\\'));
        $this->assertEquals('Hello world', clearInput('    \Hello world\\'));
    }

    /**
     * @return void
     */
    public function testClearInputKeys()
    {
        $this->assertEquals('1;2;3', clearInputKeys([1, 2, 3]));
    }

    /**
     * @return void
     */
    public function testEnsureNumberBetween()
    {
        $this->assertEquals(5, ensureNumberBetween(5, 1, 10));
        $this->assertEquals(10, ensureNumberBetween(10, 1, 10));
        $this->assertEquals(1, ensureNumberBetween(-10, 1, 10));
    }

    /**
     * @return void
     */
    public function testEnsureStringFilled()
    {
        $this->assertEquals('test', ensureStringFilled('test', 'fallback'));
        $this->assertEquals('fallback', ensureStringFilled('', 'fallback'));
    }

    /**
     * @return void
     */
    public function testEnsureStringInOptions()
    {
        $this->assertEquals('fallback', ensureStringInOptions('test', ['fallback']));
    }

    /**
     * @return void
     */
    public function testExplodeInputKeys()
    {
        $this->assertEquals([1,2,0,3,3], explodeInputKeys('1;2;0;3;3'));
    }
}