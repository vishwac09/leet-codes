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

export const splitListToParts = (head: ListNode | null, k: number): Array<ListNode | null> => {
  let totalCount = 0,
    remainder = 0;
  let parts: Array<number> | null = null;
  const output: Array<ListNode | null> = [];
  let copyListNode = head;
  while (copyListNode !== null) {
    copyListNode = copyListNode.next;
    totalCount++;
  }
  if (totalCount < k) {
    parts = Array(k).fill(1);
  } else {
    parts = Array(k).fill(Math.floor(totalCount / k));
    remainder = totalCount % k;
    let j = 0;
    while (remainder > 0) {
      parts[j] += 1;
      remainder--;
      j++;
    }
  }
  // Group and break;

  for (let j = 0; j < k; j++) {
    let i = 0,
      prev = null;
    output.push(head);
    while (head && i < parts[j]) {
      prev = head;
      head = head.next;
      i++;
    }
    if (prev !== null) {
      prev.next = null;
    }
  }
  console.log(output);
  return output;
};

// // Build the ListNode
// const t = new ListNode(10);
// const s = new ListNode(9, t);
// const r = new ListNode(8, s);
// const q = new ListNode(7, r);
// const p = new ListNode(6, q);
// const o = new ListNode(5, p);
// const n = new ListNode(4, o);
// const m = new ListNode(3, n);
// const l = new ListNode(2, m);
// const k = new ListNode(1, l);
// Eg 1
// const hh = splitListToParts(r, 5);
// console.log(hh);
// Eg 2
// const h = splitListToParts(k, 3);
// console.log(h);

// let oo = 0, prev : ListNode | null = null;
// while (k && oo < 4) {
//   console.log(k.val);
//   prev = k;
//   k = k.next;
//   oo++;
// }
// console.log(k, prev);
