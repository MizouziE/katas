<?php

namespace App;

class FindTheSmallest
{
    public static function smallest($n) {
        $num = strval($n);
        $arrVal = str_split($n, 1);
        sort($arrVal);
        $highest = array_pop($arrVal);
        $lowest = array_shift($arrVal);

            //if ??
            $i = strpos($n, $lowest);
            $j = strpos($n, $highest)-1;
            $res=$num[$i];
            $num[$i-1]=$num[$j];
            $num[$i]=$num[$j+1];
            $num[$j]=$res;

        if ($num[1]==0) {
            //if zero is second
            $i = strpos($n, $lowest)-1;
            $j = strpos($n, $highest)-1;
            $res=$num[$i];
            $num[$i]=$num[$j];
            $num[$j]=$res;
        }

        // printworks
        var_dump($lowest.' lowest in '.$n);
        var_dump($highest.' highest in '.$n);
        var_dump($num.' < different? > '.$n);
        var_dump($i.' = i');
        var_dump($j.' = j');
       return [$num, $i, $j];
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