class Solution:
    def romanToInt(self, s: str) -> int:
        romanDict = {
            'M': 1000,
            'D': 500,
            'C': 100,
            'L': 50,
            'X': 10,
            'V': 5,
            'I': 1
        }
        result = 0
        for i in range(len(s) - 1):
            if romanDict[s[i]] < romanDict[s[i+1]]:
                result -= romanDict[s[i]]
            else:
                result += romanDict[s[i]]
        result += romanDict[s[-1]]
        return result