Q: https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/description/

A:

先定義好變數 n 為 haystack 的長度，m 為 needle 的長度

等等 for 迴圈 i 的終點是 n - m (再過多就不可能會有符合 needle 的字串長度)

開始從 0 跑迴圈，用 substr 做區段字串比對

有符合的回傳 i 沒有則回傳 -1
