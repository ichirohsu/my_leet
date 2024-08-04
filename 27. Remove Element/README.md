Q: https://leetcode.com/problems/remove-element/description/

A:

變數 count 當起始位置

用 for 跑遍 array

若該值不同於變數 val

則指定給 count 的位置後，count + 1

最後回傳 count 就是剩下跟 val 數值不同的 array 長度
