<?php

namespace App;

class Rainfall
{
    public static function mean($town, $string)
    {
        $arrayData = explode("\n", $string);
        $res = [];

        foreach ($arrayData as $lineData) {
            $split = explode(':', $lineData);
            $splitData = explode(',', $split[1]);
            foreach ($splitData as &$splitTown) {
                $splitTown = explode(' ', $splitTown)[1];
            }
            $lineData = [$split[0] => $splitData];
            $res = array_merge($res, $lineData);
        }

        return array_sum($res[$town] ?? [-12]) / 12;
    }
    public static function variance($town, $string)
    {
        $mean = mean($town, $string);

        $arrayData = explode("\n", $string);
        $res = [];

        foreach ($arrayData as $lineData) {
            $split = explode(':', $lineData);
            $splitData = explode(',', $split[1]);
            foreach ($splitData as &$splitTown) {
                $splitTown = ($mean - explode(' ', $splitTown)[1]) ** 2;
            }
            $lineData = [$split[0] => $splitData];
            $res = array_merge($res, $lineData);
        }

        return array_sum($res[$town] ?? [-12]) / 12;
    }
}

// data and data1 are two strings with rainfall records of a few cities for months from January to December.
// The records of towns are separated by \n. The name of each town is followed by :.

// data and towns can be seen in "Your Test Cases:".

// Task:

// function: mean(town, strng) should return the average of rainfall for the city town and the strng data or data1

// function: variance(town, strng) should return the variance of rainfall for the city town and the strng data or data1.

// Examples:

// mean("London", data), 51.19(9999999999996) 
// variance("London", data), 57.42(833333333374)

// Notes:

// if functions mean or variance have as parameter town a city which has no records return -1.