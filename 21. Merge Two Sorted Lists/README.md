Q: https://leetcode.com/problems/merge-two-sorted-lists/description/

A:

先判斷 list1 or list2，若誰為 null 就回傳另一個 list 變數

比對 list1 和 list2 彼此現在節點的 value

若是 list1 小於 list2，則 list1 之後的節點 (next), 由 list1 下一個值去跟 list2 現在值比大小, 比到最後回傳 list1

反之，則為 list2 之後的節點 (next), 由 list2 下一個值去跟 list1 現在值比大小, 比到最後回傳 list2
