<?php

namespace Lkt\Tools\Tests;

use PHPUnit\Framework\TestCase;
use function Lkt\Tools\Arrays\arrayAverage;
use function Lkt\Tools\Arrays\arrayKeyPushUnique;
use function Lkt\Tools\Arrays\arrayPushUnique;
use function Lkt\Tools\Arrays\arrayRemoveDatum;
use function Lkt\Tools\Arrays\arrayValuesRecursive;
use function Lkt\Tools\Arrays\arrayValuesRecursiveWithKeys;
use function Lkt\Tools\Arrays\compareArrays;
use function Lkt\Tools\Arrays\getArrayFirstPosition;
use function Lkt\Tools\Arrays\implodeWithAND;
use function Lkt\Tools\Arrays\implodeWithOR;

class ArrayTest extends TestCase
{
    /**
     * @return void
     */
    public function testArrayAverage()
    {
        $this->assertEquals(5, arrayAverage([5, 5]));
    }

    /**
     * @return void
     */
    public function testArrayInArray()
    {
        $this->assertEquals(true, arrayInArray([1, 2, [3, 4]], [3, 4]));
        $this->assertEquals(false, arrayInArray([1, 2, [3, 4]], [3]));
    }

    /**
     * @return void
     */
    public function testArrayKeyPushUnique()
    {
        $arr = ['test' => 'Test'];

        arrayKeyPushUnique($arr, 'test', 'TestUpdated');
        $this->assertEquals('Test', $arr['test']);

        arrayKeyPushUnique($arr, 'test1', 'Test1');
        $this->assertEquals('Test1', $arr['test1']);
    }

    /**
     * @return void
     */
    public function testArrayPushUnique()
    {
        $arr = ['Test'];

        arrayPushUnique($arr, 'Test');
        $this->assertEquals(1, count($arr));

        arrayPushUnique($arr, 'test');
        $this->assertEquals(2, count($arr));
    }

    /**
     * @return void
     */
    public function testArrayRemoveDatum()
    {
        $arr = ['Test'];

        arrayRemoveDatum($arr, 'Test');
        $this->assertEquals(0, count($arr));
    }

    /**
     * @return void
     */
    public function testArrayValuesRecursive()
    {
        $arr = ['test' => 'Test', 'test2'=> ['a' => 'A', 'b' => 'B']];

        $test = arrayValuesRecursive($arr);
        $this->assertEquals(['Test', 'A', 'B'], $test);
    }

    /**
     * @return void
     */
    public function testArrayValuesRecursiveWithKeys()
    {
        $arr = ['test' => 'Test', 'test2'=> ['a' => 'A', 'b' => 'B']];

        $test = arrayValuesRecursiveWithKeys($arr);
        $this->assertEquals(['test' => 'Test', 'test2.a' => 'A', 'test2.b' => 'B'], $test);
    }

    /**
     * @return void
     */
    public function testCompareArrays()
    {
        $arr1 = [1, 2, 3];
        $arr2 = [1, 2, 4];

        $test = compareArrays($arr1, $arr2);
        $this->assertEquals(['added' => [4], 'deleted' => [3]], $test);
    }

    /**
     * @return void
     */
    public function testGetArrayFirstPosition()
    {
        $arr1 = [1, 2, 3];

        $test = getArrayFirstPosition($arr1);
        $this->assertEquals(1, $test);
    }

    /**
     * @return void
     */
    public function testImplodeWithAnd()
    {
        $arr1 = [1, 2, 3];

        $test = implodeWithAND($arr1);
        $this->assertEquals('1 AND 2 AND 3', $test);
    }

    /**
     * @return void
     */
    public function testImplodeWithOr()
    {
        $arr1 = [1, 2, 3];

        $test = implodeWithOR($arr1);
        $this->assertEquals('1 OR 2 OR 3', $test);
    }
}