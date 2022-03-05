<?php

use App\FindTheSmallest;
use PHPUnit\Framework\TestCase;

class FindTheSmallestTest extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }

    // /**@test */
    // public function test_does_it_work() {
    //     $this->revTest(FindTheSmallest::smallest(261235), [126235, 2, 0]);
    //     $this->revTest(FindTheSmallest::smallest(209917), [29917, 0, 1]);
    //     $this->revTest(FindTheSmallest::smallest(285365), [238565, 3, 1]);
    // }
}