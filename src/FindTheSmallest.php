<?php

namespace App;

class FindTheSmallest
{
    public static function smallest($n) {
        $splitToSort = $splitToWork = str_split($n);
        sort($splitToSort);
        if ($splitToSort[0]!==$splitToWork[0]) {
            $lowest = $splitToSort[0];
        } else {
            $lowest = $splitToSort[1];
        }
        $indexOfLowestOri = array_search($lowest, $splitToWork);
        $indexOfLowestNow = array_search($lowest, $splitToSort);
        unset($splitToWork[$indexOfLowestOri]);
        array_splice($splitToWork, $indexOfLowestNow, 0, $lowest);
        $newN = intval(implode('', $splitToWork));
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