class Solution:
    def isPalindrome(self, x: int) -> bool:
        if (x < 0):
            return False

        result = x
        temp = 0

        while (result != 0):
            temp = temp * 10 + result % 10
            result = result // 10

        if (temp == x):
            return True

        return False