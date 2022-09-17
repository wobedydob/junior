<?php

namespace Helper;


class ArrayHelper
{

    /** Checks if all values in the array are the same. */
    public static function every(array $array): bool
    {
        return $array === array_filter($array, function ($item) use ($array) {
                return ($item === $array[0]);
            });

    }

    /** Returns all data types found from the array items. */
    public static function types(array $array): array
    {

        $types = [];

        foreach ($array as $item) {
            $types[] = gettype($item);
        }

        return $types;

    }

    public static function keyType(array $array)
    {

        foreach($array as $key => $value)
        {

            //TODO: implement match check for mixed array key types (for example: ['first' => 'firstItem', 'secondItem']

            return match (gettype($key)) {
                'integer' => 'indexed',
                'string' => 'associative',
                default => throw new \Exception('Unexpected array key type in: ' . get_class()),
            };

        }
    }

}