<?php

namespace Collect;
use PHPUnit\Framework\TestCase;

class SpliceTest extends TestCase
{
    public function testSplice()
    {
        $expected = ["one", "two"];
        $test_array = ["one", "two", "three", "four"];
        $test = new Collect($test_array);
        $actual = $test->splice($test_array, 2);
        $this->assertSame(
            $expected,
            $actual,
            "actual value is not same as expected value"
        );
    }

}