<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $count = 0;
        for ($i=0;$i < count($nums);$i++) {
            if ($val != $nums[$i]) {
                $nums[$count] = $nums[$i];
                $count++;
            }
        }
        return $count;
    }
}
