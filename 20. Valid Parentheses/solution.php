<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $arr = [
            '(' => ')',
            '{' => '}',
            '[' => ']',
        ];
        $stack = [];
        for ($i=0;$i<strlen($s);$i++) {
            if (array_key_exists($s[$i], $arr)) {
                $stack[] = $s[$i];
            } else if (false === ($idx = array_search($s[$i], $arr))) {
                return false;
            } else if ($idx != array_pop($stack)) {
                return false;
            }
        }

        return empty($stack) ? true : false;
    }
}