<?php

namespace Helper;

class StringHelper
{

    /** Returns an array of the string characters. */
    public static function characters(string $string): array
    {
        return str_split($string);
    }

    /** Checks if given string has given search keyword(s). */
    public static function find(string $string, string $search): bool|string
    {
        return str_contains($string, $search);
    }

}