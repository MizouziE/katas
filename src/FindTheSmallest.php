<?php

namespace App;

class FindTheSmallest
{
    public static function smallest($n) {
        $work = str_split($n, 1);

        $low = array_reduce($work, fn ($a, $b) => $a<$b ? $a : $b, 9 );

        $i = array_search($low, $work);//lowest index of digit moved

        unset($work[$i]);

        $high = array_reduce($work, fn ($a, $b) => $a>$b ? $a : $b, 0);

        $j = array_search($high, $work)-1;//new index of moved digit

        $reset = array_merge(array_slice($work, 0, $j), array($low), array_slice($work, $j));
        
        $num = implode('', $reset);//new version of number

        // printworks
        // var_dump($low.' lowest in '.$n);
        var_dump($high.' highest in '.$n);
        // var_dump($num.' < different? > '.$n);
        // var_dump($i.' = i');
        var_dump($j.' = j');
       return [(int)$num, $i, (int)$j];
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