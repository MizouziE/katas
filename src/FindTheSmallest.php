<?php

namespace App;

class FindTheSmallest
{
    public static function smallest($n) {
        $splitToSort = $splitToWork = str_split($n);
        sort($splitToSort);
        $lowest = $splitToSort[0];
        $indexOfLowestOri = array_search($lowest, $splitToWork);
        $indexOfLowestNow = array_search($lowest, $splitToSort);
        unset($splitToWork[$indexOfLowestOri]);
        array_splice($splitToWork, $indexOfLowestNow, 0, $lowest);
        $newN = intval(implode('', $splitToWork));
      //   return $newN;
        return [$newN, $indexOfLowestOri, $indexOfLowestNow];
      }
}