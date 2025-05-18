<?php

namespace Collect;
use PHPUnit\Framework\TestCase;

class KeysTest extends TestCase
{
    public function testKeys()
    {
        $expected = ["shape", "color"];
        $test_array = array("shape" => "cube", "color" => "green");
        $test = new Collect($test_array);
        $actual = $test->keys();
        $this->assertSame(
            $expected,
            $actual,
            "actual value is not same as expected value"
        );
    }

}