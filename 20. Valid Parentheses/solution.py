class Solution:
    def isValid(self, s: str) -> bool:
        stack = []
        pair = {
            ')': '(',
            ']': '[',
            '}': '{'
        }
        left_bracket = set( pair.values() )

        for char in s:
            if char in left_bracket:
                stack.append(char)
            elif not stack or (stack[-1] != pair[char]):
                return False
            else:
                stack.pop()

        return len(stack) == 0
