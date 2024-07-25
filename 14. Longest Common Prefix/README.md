Q: https://leetcode.com/problems/longest-common-prefix/description/

A:

第一個 for 跑 array 第一組字串，依序將每個位置的字元取出

去比對 array 中其它組字串中同樣位置的字元是否相等 (用第 2 個 for 去跑)

若相同則紀錄於 prefix 變數中，若不同都跳出迴圈回傳 prefix 結果