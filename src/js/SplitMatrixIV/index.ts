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
  const result: number[][] = [];
  for (let k = 0; k < n; k++) {
    result[k] = [];
  }
  let currentDirection = 'rr';
  // rr = row-right
  // rl = row-left
  // cd = col-down
  // cu = col-up
  let x = 0; // col
  let y = 0; // row
  for (let k = 0; k < m * n; k++) {
    result[y][x] = head ? head.val : -1;
    // y = row, x = col
    if (currentDirection === 'rr') {
      if (x === n - 1 || typeof result[y][x + 1] === 'undefined') {
        // change the direction here.
        currentDirection = 'cd';
        y = y + 1;
      } else {
        x = x + 1;
      }
    } else if (currentDirection === 'cd') {
      if (y === m - 1 || typeof result[y + 1][x] === 'undefined') {
        // change the direction here.
        currentDirection = 'rl';
        x = x - 1;
      } else {
        y = y + 1;
      }
    } else if (currentDirection === 'rl') {
      if (x === 0 || typeof result[y][x - 1] === 'undefined') {
        // console.log('x>0', x>0);
        // console.log('typeof result[y][x-1] === \'undefined\'', typeof result[y][x-1] === 'undefined');
        // change the direction here.
        currentDirection = 'cu';
        y = y - 1;
      } else {
        x = x - 1;
      }
    } else if (currentDirection === 'cu') {
      if (y === 0 || typeof result[y - 1][x] === 'undefined') {
        // change the direction here.
        currentDirection = 'rr';
        x = x + 1;
      } else {
        y = y - 1;
      }
    }
    if (head) {
      head = head?.next;
    }
  }
  return result;
};

// const c = new ListNode(22);
// const b = new ListNode(11, c);
// const a = new ListNode(10, b);
// const output = spiralMatrix(1, 4, a);
// console.log(output);

// const m = new ListNode(13);
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
// const output = spiralMatrix(3, 5, a);
// console.log(output);
