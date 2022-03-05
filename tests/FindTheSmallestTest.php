<?php

use App\FindTheSmallest;
use PHPUnit\Framework\TestCase;

class FindTheSmallestTest extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }

    // /**@test */
    // public function it_works() {
    //     $this->revTest(FindTheSmallest::smallest(261235), [126235, 2, 0]);
    //     $this->revTest(FindTheSmallest::smallest(209917), [29917, 0, 1]);
    //     $this->revTest(FindTheSmallest::smallest(285365), [238565, 3, 1]);
    // }

    /**@test */
    public function test_it_works_when_lowest_digit_is_central() {
        $this->revTest(FindTheSmallest::smallest(261235)[0], 126235);
    }

    /**@test */
    public function test_it_works_when_lowest_digit_is_second() {
        $this->revTest(FindTheSmallest::smallest(209917)[0], 29917);
    }

    /**@test */
    public function test_it_works_when_lowest_digit_is_first() {
        $this->revTest(FindTheSmallest::smallest(285365)[0], 238565);
    }
}