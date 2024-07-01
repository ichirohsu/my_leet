<?php
class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        if ($columnNumber < 27) {
            return chr($columnNumber + 64);
        }

        $result = '';
        while ($columnNumber > 0) {
            $codeNum = ($columnNumber - 1) % 26;
            $result = chr($codeNum + 65) . $result;
            $columnNumber = intdiv($columnNumber - 1, 26);
        }

        return $result;
    }
}
