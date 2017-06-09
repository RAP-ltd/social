<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 09.06.2017
 * Time: 20:13
 */

namespace RAP\helpers;

class Validator
{
    protected static function validate($var, $pattern = '.*', $showMatches = false)
    {
        if ($showMatches === false) {
            return preg_match("~^{$pattern}$~uisU", $var);
        } else {
            return [
                'result' => preg_match("~^{$pattern}$~uisU", $var, $matches),
                'matches' => $matches
            ];
        }
    }

    public static function num($var, $showMatches = false)
    {
        return self::validate($var, '\d+', $showMatches);
    }

    public static function string($var, $showMatches = false)
    {
        return self::validate($var, '[A-ZА-ЯёЁ]', $showMatches);
    }

    public static function text($var, $showMatches = false)
    {
        return self::validate($var, '[A-ZА-ЯёЁ_.,\-]', $showMatches);
    }

    public static function date($var, $showMatches = false)
    {
        return self::validate($var, '(?<year>((19[0-9][0-9])|(20[0-9][0-9])))[.,\-/](?<mon>(([1-9])|(1[0-2])))[.,\-/](?<day>([1-9])|(1[0-9])|(2[0-9])|(3[01]))', $showMatches);
    }

    public static function byPattern($var, $pattern, $showMatches = false)
    {
        return self::validate($var, $pattern, $showMatches);
    }
}