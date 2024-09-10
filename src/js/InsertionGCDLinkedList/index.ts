import { ListNode } from '../../libs/ListNode';
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

export const insertGreatestCommonDivisors = (head: ListNode | null): ListNode | null => {
  if (head === null || head?.next === null) {
    return head;
  }

  const createNewNode = (val = 99): ListNode => {
    return new ListNode(val);
  };

  const gcd = (a: number, b: number): number => {
    if (b === 0) return a;
    return gcd(b, a % b);
  };

  let prev: ListNode | null = head,
    curr: ListNode | null = head.next;
  while (curr !== null) {
    if (prev !== null) {
      const temp = createNewNode(gcd(prev.val, curr.val));
      prev.next = temp;
      temp.next = curr;
    }
    prev = curr;
    curr = curr.next;
  }
  return head;
};

// const t = new ListNode(10);
// const s = new ListNode(9, t);
// const r = new ListNode(8, s);
// const q = new ListNode(7, r);
// const p = new ListNode(6, q);
// const o = new ListNode(5, p);
// const n = new ListNode(3);
// const m = new ListNode(10, n);
// const l = new ListNode(6, m);
// const k = new ListNode(18, l);
// let output = insertGreatestCommonDivisors(k);
// console.log('TC1');
// while (output !== null) {
//   console.log(`-${output.val}-`);
//   output = output.next;
// }
// console.log("\n");
// console.log("\n");
// const b = new ListNode(6);
// const a = new ListNode(18, b);
// let output1 = insertGreatestCommonDivisors(a);
// console.log('TC2');
// while (output1 !== null) {
//   console.log(`-${output1.val}-`);
//   output1 = output1.next;
// }
