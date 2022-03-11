<?php

use App\FindTheSmallest;
use PHPUnit\Framework\TestCase;

class FindTheSmallestTest extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }

    /**@test */
    public function test_it_works() {
        $this->revTest(FindTheSmallest::smallest(261235), [126235, 2, 0]);
        $this->revTest(FindTheSmallest::smallest(209917), [29917, 0, 1]);
        $this->revTest(FindTheSmallest::smallest(285365), [238565, 3, 1]);
        $this->revTest(FindTheSmallest::smallest(187863002809), [18786300289, 10, 0]);
        $this->revTest(FindTheSmallest::smallest(935855753), [358557539, 0, 8]);
        $this->revTest(FindTheSmallest::smallest(94883608842), [9488368842, 6, 0]);
        $this->revTest(FindTheSmallest::smallest(1598536651115738), [1159853665115738, 9, 0]);
        $this->revTest(FindTheSmallest::smallest(111111111), [111111111, 0, 0]);
    }

    /**@test */
    public function test_it_works_when_lowest_digit_is_central() {
        $this->revTest(FindTheSmallest::smallest(261235)[0], 126235);
        $this->revTest(FindTheSmallest::smallest(261235)[1], 2);
        $this->revTest(FindTheSmallest::smallest(261235)[2], 0);
    }

    /**@test */
    public function test_it_works_when_lowest_digit_is_second() {
        $this->revTest(FindTheSmallest::smallest(209917)[0], 29917);
        $this->revTest(FindTheSmallest::smallest(209917)[1], 0);
        $this->revTest(FindTheSmallest::smallest(209917)[2], 1);
    }

    /**@test */
    public function test_it_works_when_lowest_digit_is_first() {
        $this->revTest(FindTheSmallest::smallest(285365)[0], 238565);
        $this->revTest(FindTheSmallest::smallest(285365)[1], 3);
        $this->revTest(FindTheSmallest::smallest(285365)[2], 1);
    }

    /**@test */
    public function test_it_works_with_long_complex_input() {
        $this->revTest(FindTheSmallest::smallest(187863002809)[0], 18786300289);
        $this->revTest(FindTheSmallest::smallest(187863002809)[1], 10);
        $this->revTest(FindTheSmallest::smallest(187863002809)[2], 0);
    }    

    /**@test */
    public function test_it_works_with_first_largest_and_second_smallest() {
        $this->revTest(FindTheSmallest::smallest(935855753)[0], 358557539);
        $this->revTest(FindTheSmallest::smallest(935855753)[1], 0);
        $this->revTest(FindTheSmallest::smallest(935855753)[2], 8);
    }   

    /**@test */
    public function test_it_works_with_first_largest_and_zero_somewhere() {
        $this->revTest(FindTheSmallest::smallest(94883608842)[0], 9488368842);
        $this->revTest(FindTheSmallest::smallest(94883608842)[1], 6);
        $this->revTest(FindTheSmallest::smallest(94883608842)[2], 0);
    }   

    /**@test */
    public function test_it_works_with_first_smallest_and_reoccuring() {
        $this->revTest(FindTheSmallest::smallest(1598536651115738)[0], 1159853665115738);
        $this->revTest(FindTheSmallest::smallest(1598536651115738)[1], 9);
        $this->revTest(FindTheSmallest::smallest(1598536651115738)[2], 0);
    }   

    /**@test */
    public function test_it_works_with_nun_but_reoccuring() {
        $this->revTest(FindTheSmallest::smallest(111111111)[0], 111111111);
        $this->revTest(FindTheSmallest::smallest(111111111)[1], 0);
        $this->revTest(FindTheSmallest::smallest(111111111)[2], 0);
    }   

    //TODO - figure out tests for error below
    // Failed asserting that two arrays are equal.
    // Expected: Array (
    //     0 => 111111111
    //     1 => 0
    //     2 => 0
    // )
    // Actual  : Array (
    //     0 => 111111111
    //     1 => 0
    //     2 => 1
    // )
    // Completed in 0.63ms
    // testRandom
    // Failed asserting that two arrays are equal.
    // Expected: Array (
    //     0 => 118017899164345
    //     1 => 0
    //     2 => 7
    // )
    // Actual  : Array (
    //     0 => 801181799164345
    //     1 => 5
    //     2 => 0
    // )
}