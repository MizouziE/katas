<?php

namespace App;

class PlayingWithDigits
{
    public static function digPow($n, $p) {
      $l = str_split(strval($n));
      foreach ($l as $k => &$v) {
        $v = $v**($p+$k);
      }
      $ans = array_sum($l)/$n;
      return is_int($ans) ?? $ans>=1 ? $ans : -1;
    }
}