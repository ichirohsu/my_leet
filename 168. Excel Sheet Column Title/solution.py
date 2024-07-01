class Solution:
    def convertToTitle(self, columnNumber: int) -> str:
        ans = ""
        while columnNumber > 0:
            temp = columnNumber % 26
            if 0 == temp:
                temp = 26
            ans = chr(64+temp)+ans
            columnNumber = (columnNumber - temp)//26
        return ans