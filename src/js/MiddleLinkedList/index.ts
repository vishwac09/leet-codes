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

import { ListNode } from '../../libs/TreeNode';

export const middleNode = (head: ListNode | null): ListNode | null => {
  if (head === null) return head;
  let i: ListNode | null, j: ListNode | null;
  j = head;
  i = head;
  while (j !== null && j.next !== null) {
    i = i?.next || null;
    j = j?.next.next;
  }
  return i;
};

// const c = new ListNode(3);
// const b = new ListNode(2, c);
// const a = new ListNode(1, b);

// // console.log({ a });

// const h = middleNode(a);
// console.log(h);
