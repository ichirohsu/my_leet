Q: https://leetcode.com/problems/two-sum

A:

開一個空 object 的變數

針對原本的 nums 跑 for 迴圈

將 target 減去 取出的值

檢查在 object 中若沒有匹配則紀錄的值跟所在的 key

若有匹配則回傳 兩個 key 的組合結果
