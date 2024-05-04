<?php

namespace App;

class Truncater
{
    private $options;

    public static $defaultOptions = [
        'separator' => '...',
        'length' => 50,
    ];

    public function __construct(array $options = [])
    {
        $this->options = array_merge(self::$defaultOptions, $options);
    }

    public function truncate($string, $options = [])
    {
        $options = array_merge($this->options, $options);

        if (strlen($string) > $options['length']) {
            $newMessage = mb_substr($string, 0, $options['length']);
            $newMessage .= $options['separator'];
            return $newMessage;
        } else {
            return $string;
        }
    }
}
