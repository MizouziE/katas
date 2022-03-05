<?php

namespace App;

class FindTheSmallest
{
    public static function smallest($n) {
        // create two identical arrays to manipulate
        $splitToSort = $splitToWork = str_split($n);

        // sort one by asc order
        sort($splitToSort);

        // check if $n didn't already start with it's lowest digit
        if ($splitToSort[0]!==$splitToWork[0]) {
            $lowest = $splitToSort[0];
        } else {
            $lowest = $splitToSort[1];
        }

        //count reoccuances to set output param
        $bunch = array_keys($splitToWork, $splitToSort[0]);
        $count = count($bunch);
        if ($count>1) {
        $indexOfLowestOri = array_search($lowest, array_reverse($splitToWork, true));            
        } else {
        $indexOfLowestOri = array_search($lowest, $splitToWork);
        }

        // set other output params
        $indexOfLowestNow = array_search($lowest, $splitToSort);

        // remove the digit to be "repositioned"
        unset($splitToWork[$indexOfLowestOri]);

        // re-position lowest digit
        array_splice($splitToWork, $indexOfLowestNow, 0, $lowest);

        // set new $n value to be returned
        $newN = intval(implode('', $splitToWork));

        // return an array of desired params
        return $indexOfLowestOri!==1 ? [$newN, $indexOfLowestOri, $indexOfLowestNow] : [$newN, $indexOfLowestNow, $indexOfLowestOri];
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