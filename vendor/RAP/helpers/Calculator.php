<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 18:36
 */

namespace RAP\helpers;

class Calculator
{
    public static function A2($matrix = [
        [0, 0],
        [0, 0]
    ])
    {
        $a1 = $matrix[0][0] * $matrix[1][1];
        $a2 = $matrix[0][1] * $matrix[1][0];
        return $a1 - $a2;
    }

    public static function A3($matrix = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0]
    ])
    {
        //print_r($matrix);
        $a1 = $matrix[0][0] * $matrix[1][1] * $matrix[2][2];
        $a2 = $matrix[0][1] * $matrix[1][2] * $matrix[2][0];
        $a3 = $matrix[0][2] * $matrix[1][0] * $matrix[2][1];
        $b1 = $matrix[0][2] * $matrix[1][1] * $matrix[2][0];
        $b2 = $matrix[0][1] * $matrix[1][0] * $matrix[2][2];
        $b3 = $matrix[0][0] * $matrix[1][2] * $matrix[2][1];
        $c1 = $a1 + $a2 + $a3;
        $c2 = $b1 + $b2 + $b3;
        return $c1 - $c2;
        //return true;
    }

    public static function C2($matrix, $row, $col)
    {
        $matrix[0][$col] = $row[0][0];
        $matrix[1][$col] = $row[1][0];
        return $matrix;
    }

    public static function C3($matrix, $row, $col)
    {
        $matrix[0][$col] = $row[0][0];
        $matrix[1][$col] = $row[1][0];
        $matrix[2][$col] = $row[2][0];
        return $matrix;
    }

    public static function getX3($matrix = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0]
    ], $row = [
        [0],
        [0],
        [0]
    ])
    {
        $A = self::A3($matrix);
        $A1 = self::A3(self::C3($matrix, $row, 0));
        $A2 = self::A3(self::C3($matrix, $row, 1));
        $A3 = self::A3(self::C3($matrix, $row, 2));
        return [
            'X1' => $A1 / $A,
            'X2' => $A2 / $A,
            'X3' => $A3 / $A
        ];
    }

}