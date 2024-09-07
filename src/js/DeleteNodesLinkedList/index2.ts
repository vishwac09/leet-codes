/**
 * Definition for singly-linked list.
 * class ListNode {
 *     val: number
 *     next: ListNode | null
 *     constructor(val?: number, next?: ListNode | null) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.next = (next===undefined ? null : next)
 *     }
 * }
 */

import { ListNode } from '../../libs/ListNode';

export const modifiedList = (nums: number[], head: ListNode | null): ListNode | null => {
  if (head === null) {
    return null;
  }
  const numsSet = new Set(nums);

  let curr: ListNode | null = head,
    prev: ListNode | null = null;
  while (curr !== null) {
    if (numsSet.has(curr.val)) {
      if (prev === null) {
        prev = curr;
      } else {
        prev.next = curr.next;
      }
    } else {
      prev = curr;
    }
    curr = curr.next;
  }
  return numsSet.has(head.val) ? head.next : head;
};

// const d = new ListNode(2, null);
// const c = new ListNode(1, d);
// const b = new ListNode(2, c);
// const a = new ListNode(1, b);

// const h = modifiedList([2,1], a);
// console.log('result', h);
