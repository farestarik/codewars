<?php

include "helpers.php";

class VigenereCipher {
    public $alphabet, $key;

    public function __construct($alphabet, $key)
    {
        $this->alphabet = $alphabet;
        $this->key = $key;
    }

    public function extend_key($input){
        $key_len = strlen($this->key);
        $input_len = strlen($input);
        $repeated_key = str_repeat($this->key, ceil($input_len / $key_len));
        return substr($repeated_key, 0, $input_len);
    }


    public function encode($input) {
        $input = strtolower($input);
        $key = $this->extend_key($input);
        $result = '';

        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];
            $keychar = $key[$i];
            if (strpos($this->alphabet, $char) !== false) {
                $index = (strpos($this->alphabet, $char) + strpos($this->alphabet, $keychar)) % strlen($this->alphabet);
                $result .= $this->alphabet[$index];
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
    public function decode($input) {
        $input = strtolower($input);
        $key = $this->extend_key($input);
        $result = '';

        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];

            if (strpos($this->alphabet, $char) !== false) {
                $index = (strpos($this->alphabet, $char) - strpos($this->alphabet, $key[$i]) + strlen($this->alphabet)) % strlen($this->alphabet);
                $result .= $this->alphabet[$index];
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

}
$alog = new VigenereCipher("abcdefghijklmnopqrstuvwxyz", "password");
echo $alog->encode("codewars");
echo $alog->decode("rovwsoiv");