<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0)
            return false;

        $sum = 0;
        $a = $x;
        while(0 != $a) {
            $sum = $sum * 10 + ($a % 10);
            $a = intdiv($a, 10);
        };

        return ($x == $sum);
    }
}