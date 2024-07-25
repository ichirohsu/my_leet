class Solution:
    def longestCommonPrefix(self, strs: List[str]) -> str:
        count = len(strs)
        if (1 == count):
            return strs[0]

        prefix = ''
        for i in range(len(strs[0])):
            for j in range(1, count):
                if i >= len(strs[j]) or (strs[0][i] != strs[j][i]):
                    return prefix
            prefix = prefix + strs[0][i]

        return prefix
