Q: https://leetcode.com/problems/palindrome-number/description/

A:

若是能用字串，只要 for 迴圈一個跑頭一個跑尾互相比較即可

若是限定數字，將數字分批取餘數後 * 10 相加，跟原來的值一樣的就是回文數字