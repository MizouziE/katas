<?php

use App\PlayingWithDigits;
use PHPUnit\Framework\TestCase;

class PlayingWithDigitsTest extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertSame($expected, $actual);
    }
    /** @test */
    public function it_returns_expected_result() {        
        $this->revTest(PlayingWithDigits::digPow(89, 1), 1);
        $this->revTest(PlayingWithDigits::digPow(92, 1), -1);
        $this->revTest(PlayingWithDigits::digPow(46288, 3), 51);
    }
}