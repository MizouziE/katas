<?php

namespace App;

class FindTheSmallest
{
    public static function smallest($n) {
        // create two identical arrays to manipulate
        $splitToSort = $splitToWork = $sliceMe = str_split($n);

        // sort one by asc order
        sort($splitToSort);

        // check for large start and zeros
        if ($splitToSort[count($splitToSort)-1]===$splitToWork[0] && in_array(0, $splitToSort)) {
            $mover = 0;
        // check if $n didn't already start with it's highest/lowest digit
        } else if ($splitToSort[count($splitToSort)-1]===$splitToWork[0]) {
            $mover = $splitToSort[count($splitToSort)-1];
        } else if ($splitToSort[0]!==$splitToWork[0]) {
            $mover = $splitToSort[0];
        } else {
            $mover = $splitToSort[1];
        }

        //count reoccuances to set output param
        $bunch = array_keys($splitToWork, $mover);
        $count = count($bunch);
        if ($count>1 && $splitToWork[0]===$mover) {
            // $sliceMe = $splitToWork;
            $withoutFirst = array_slice($sliceMe, 1);
            $indexOfMoverOri = array_search($mover, $withoutFirst)+1;
        } else if ($count>1) {
            $indexOfMoverOri = array_search($mover, array_reverse($splitToWork, true));            
        } else {
            $indexOfMoverOri = array_search($mover, $splitToWork);
        }

        // set other output params
        $indexOfMoverNow = array_search($mover, $splitToSort);

        // remove the digit to be "repositioned"
        unset($splitToWork[$indexOfMoverOri]);

        // re-position lowest digit
        array_splice($splitToWork, $indexOfMoverNow, 0, $mover);

        // set new $n value to be returned
        $newN = intval(implode('', $splitToWork));

        // return an array of desired params
        return $indexOfMoverOri!==1 ? [$newN, $indexOfMoverOri, $indexOfMoverNow] : [$newN, $indexOfMoverNow, $indexOfMoverOri];
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