Q: https://leetcode.com/problems/remove-duplicates-from-sorted-array/description/

A:

用一個變數 count 紀錄比較起始點

由於 array 已經排序過，所以用一個 for 從頭運行

遇到數字不一樣時，就把數字往前移到 count 後一個位置，然後再繼續往後比較


