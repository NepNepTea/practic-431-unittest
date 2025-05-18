<?php

namespace Collect;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testFirst()
    {
        $expected = "one";
        $test = new Collect(["one", "two", "three"]);
        $actual = $test->first();
        $this->assertSame(
            $expected,
            $actual,
            "actual value is not same as expected value"
        );
    }

}