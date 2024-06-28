<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $prev = new ListNode;
        $head = $prev;
        $sum = $carry = 0;
        while ($l1 || $l2 || $carry > 0) {
            $sum = $carry;
            if (!empty($l1)) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }
            if (!empty($l2)) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }
            $carry = (10 <= $sum ? 1 : 0);
            $prev->next = new ListNode($sum % 10);
            $prev = $prev->next;
        }

        return $head->next;
    }
}
