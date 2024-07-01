Q: https://leetcode.com/problems/add-two-numbers

A:

建立一個 head 當 Linked List 起點做 return 用

建立 $sum 存總和，$carry 存是否進位

跑 while 條件是 2 個 list 其中一個存在，或是 $carry 有值

進迴圈後將 2 個 list 的 node 跟 $carry 相加獲得 $sum

$sum 若大於 10 則將 $carry 設定 1 本身只留下個位數

前進到下一個 node 重複相同的計算到結束為止