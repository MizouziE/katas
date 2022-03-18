<?php

namespace App;

class FindTheSmallest
{
    public static function smallest($n) {
        //setup
        $arr = str_split($n, 1);
        $j = 0;
        //find smallest from the back
        $arrR = array_reverse($arr, true);
        $iV = 9;
        foreach ($arrR as $k => $v) {
            if ($v<$iV) {
                $iV = $v;
                $iEasy = $k;
            }
        //check for dodgy start and asign $i accordingly
        $arrRCheck = array_slice($arrR, 0, count($arrR)-1, true);
        $iVCheck = 9;
        foreach ($arrRCheck as $k => $v) {
            if ($v<$iVCheck) {
                $iVCheck = $v;
                $iCheck = $k;
            }
        if ($iEasy == $iCheck) {
            $i = $iEasy;
        } else {
            $i = $iCheck;
        }
        }
        }
        var_dump("\n");
        var_dump($arrR);
        var_dump($arrRCheck);
        var_dump("i = ".$i);
        var_dump("iEasy = ".$iEasy);
        var_dump("iCheck = ".$iCheck);
        return [
            // $res,
            $i,
            $j
        ];
      }
}

// THE TASK

// You have a positive number n consisting of digits. You can do at most one operation: 
// Choosing the index of a digit in the number, remove this digit at that index and insert it
// back to another or at the same place in the number in order to find the smallest number you
// can get.

// Task:
// Return an array or a tuple or a string depending on the language (see "Sample Tests") with

// the smallest number you got
// the index i of the digit d you took, i as small as possible
// the index j (as small as possible) where you insert this digit d to have the smallest number.