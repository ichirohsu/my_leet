<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $rule = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $sum = 0;

        for ($i=0;$i<strlen($s);$i++) {
            if ($rule[$s[$i]] < $rule[$s[$i+1]]) {
                $sum -= $rule[$s[$i]];
            } else {
                $sum += $rule[$s[$i]];
            }
        }

        return $sum;
    }
}