<?php

namespace Collect;
use PHPUnit\Framework\TestCase;

class PopTest extends TestCase
{
    public function testPop()
    {
        $expected = ["one", "two"];
        $test = new Collect(["one", "two", "three"]);
        $actual = $test->pop();
        $this->assertSame(
            $expected,
            $actual,
            "actual value is not same as expected value"
        );
    }

}