<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = '';
        $first = $strs[0];
        $len = strlen($first);
        for ($i=0;$i < $len;$i++) {
            for ($j=1;$j < count($strs);$j++) {
                if ($first[$i] != $strs[$j][$i]) {
                    return $prefix;
                }
            }
            $prefix .= $first[$i];
        }

        return $prefix;
    }
}
