<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $temp = [];
        for ($i=0;$i<count($nums);$i++) {
            $diff = $target - $nums[$i];
            if (isset($temp[$diff])) {
                return [$temp[$diff], $i];
            } else {
                $temp[$nums[$i]] = $i;
            }
        }
    }
}
