Q: https://leetcode.com/problems/roman-to-integer/description/

A:

建立一個 map 對應羅馬數字代表的整數

從字串的左跑到右將數字的結果組合起來

若現在這個位置的數字 大等於 下一個位置的字，組合時用 *加法*

若現在這個位置的數字 小於 下一個位置的字，組合時用 *減法*
