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

export const spiralMatrix = (m: number, n: number, head: ListNode | null): number[][] => {
  const matrix: number[][] = Array(m);
  for (let i = 0; i < m; i++) {
    matrix[i] = Array(n).fill(-1);
  }
  let i = -1;
  let j = 0;
  // rr = row-right, cd = column-down, rl = row-left, cu = column-up
  const direction: { [ket: string]: Array<number> } = {
    rr: [1, 0],
    cd: [0, 1],
    rl: [-1, 0],
    cu: [0, -1],
  };
  let currDirection = 'rr';
  while (head !== null) {
    if (currDirection === 'rr') {
      if (i === n - 1 || matrix[j][i + 1] !== -1) {
        currDirection = 'cd';
      }
    } else if (currDirection === 'cd') {
      if (j === m - 1 || matrix[j + 1][i] !== -1) {
        currDirection = 'rl';
      }
    } else if (currDirection === 'rl') {
      if (i === 0 || matrix[j][i - 1] !== -1) {
        currDirection = 'cu';
      }
    } else if (currDirection === 'cu') {
      if (j === 0 || matrix[j - 1][i] !== -1) {
        currDirection = 'rr';
      }
    }
    i += direction[currDirection][0];
    j += direction[currDirection][1];
    matrix[j][i] = head.val;
    head = head.next;
  }

  return matrix;
};

// const c = new ListNode(22);
// const b = new ListNode(11, c);
// const a = new ListNode(10, b);
// const output = spiralMatrix(1, 4, a);
// console.log(output);

// const x = new ListNode(24);
// const w = new ListNode(23, x);
// const v = new ListNode(22, w);
// const u = new ListNode(21, v);
// const t = new ListNode(20, u);
// const s = new ListNode(19, t);
// const r = new ListNode(18, s);
// const q = new ListNode(17, r);
// const p = new ListNode(16, q);
// const o = new ListNode(15, p);
// const n = new ListNode(14, o);
// const m = new ListNode(13, n);
// const l = new ListNode(12, m);
// const k = new ListNode(11, l);
// const j = new ListNode(10, k);
// const i = new ListNode(9, j);
// const h = new ListNode(8, i);
// const g = new ListNode(7, h);
// const f = new ListNode(6, g);
// const e = new ListNode(5, f);
// const d = new ListNode(4, e);
// const c = new ListNode(3, d);
// const b = new ListNode(2, c);
// const a = new ListNode(1, b);
// const output = spiralMatrix(5, 5, a);
// console.log('Matrix of 5x5');
// for (let u = 0; u < 5; u++) {
//   console.log(output[u]);
// }
