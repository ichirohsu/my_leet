Q: https://leetcode.com/problems/valid-parentheses/description/

A:

建立一個 map 對照左右括號

用迴圈跑字串

若是左邊的括號，就存入 stack

若是右邊的括號，先去 map 找出對應的左括號

然後將上一個左括號從 stack pop 出來比較有沒有一樣，有的話就繼續，沒有就失敗

一直到跑完所有字串，如果能清空 stack 則成功，其它狀況都算失敗
