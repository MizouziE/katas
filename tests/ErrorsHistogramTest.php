<?php

use App\ErrorsHistogram;
use PHPUnit\Framework\TestCase;

class ErrorsHistogramTest extends TestCase
{
    public function dotest($s, $expect) {
        printf("s: %s\r\n", $s);
        $actual = ErrorsHistogram::hist($s);
        printf("Actual: %s\r\n", $actual);
        printf("Expect: %s\r\n", $expect);
        $this->assertEquals($expect, $actual);
        printf("%s\r\n", "-");
    }
    /** @test */
    public function test_it_prints_expected() {        
        $this->dotest("tpwaemuqxdmwqbqrjbeosjnejqorxdozsxnrgpgqkeihqwybzyymqeazfkyiucesxwutgszbenzvgxibxrlvmzihcb", 
            "u  3     ***\rw  4     ****\rx  6     ******\rz  6     ******");
        $this->dotest("aaifzlnderpeurcuqjqeywdq", "u  2     **\rw  1     *\rz  1     *");
        $this->dotest("sjeneccyhrcpfvpujfaoaykqllteovskclebmzjeqepilxygdmzvdfmxbqdzubkzturnuqxsewrwgmdfwgdx", 
            "u  4     ****\rw  3     ***\rx  4     ****\rz  4     ****");
        $this->dotest("bnxyytdtqrkeaswymiwbxnuydwthweyzny", "u  1     *\rw  4     ****\rx  2     **\rz  1     *");
        $this->dotest("ttopvdaxgwfpzjmomkwssytktaizqtsekfmfhrabidwaugioqyyzrxbugsusxkfdevmijqyprcoxfyjqwsutoutjgozyhsoytg", 
            "u  5     *****\rw  4     ****\rx  4     ****\rz  4     ****");
        $this->dotest("slirsxpbiholwngafelbbfxrpvqbcaykiazzgivjwgdqmz", 
            "w  2     **\rx  2     **\rz  3     ***");
        
    }
}