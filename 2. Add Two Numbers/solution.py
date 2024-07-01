# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, val=0, next=None):
#         self.val = val
#         self.next = next
class Solution:
    def addTwoNumbers(self, l1: Optional[ListNode], l2: Optional[ListNode]) -> Optional[ListNode]:
        head = ListNode(0)
        prev = head
        sums = carry = 0

        while l1 is not None or l2 is not None or carry > 0:
            sums = carry
            if l1 is not None:
                sums += l1.val
                l1 = l1.next
            if l2 is not None:
                sums += l2.val
                l2 = l2.next

            prev.next = ListNode(sums%10)
            prev = prev.next
            carry = 1 if 10 <= sums else 0

        return head.next
