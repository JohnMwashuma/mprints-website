<?php

namespace duncan3dc\Serial;

interface SerialInterface
{

    /**
     * Convert an array to a serial string.
     *
     * @param array|ArrayObject The data to encode
     *
     * @return string
     */
    public static function encode($array);


    /**
     * Convert a serial string to an array.
     *
     * @param array The data to decode
     *
     * @return ArrayObject
     */
    public static function decode($string);


    /**
     * Convert an array to a serial string, and then write it to a file.
     *
     * Attempts to create the directory if it does not exist.
     *
     * @param string The path to the file to write
     * @param array|ArrayObject The data to decode
     *
     * @return void
     */
    public static function encodeToFile($path, $array);


    /**
     * Read a serial string from a file and convert it to an array.
     *
     * @param string The path of the file to read
     *
     * @return ArrayObject
     */
    public static function decodeFromFile($path);
}
