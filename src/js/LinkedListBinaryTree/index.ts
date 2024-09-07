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
import { TreeNode } from '../../libs/TreeNode';

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     val: number
 *     left: TreeNode | null
 *     right: TreeNode | null
 *     constructor(val?: number, left?: TreeNode | null, right?: TreeNode | null) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.left = (left===undefined ? null : left)
 *         this.right = (right===undefined ? null : right)
 *     }
 * }
 */

export const isSubPath = (head: ListNode | null, root: TreeNode | null): boolean => {
  if (!root) return false;
  return parsePreOrder(root, head) || isSubPath(head, root.left) || isSubPath(head, root.right);
};

export const parsePreOrder = (root: TreeNode | null, head: ListNode | null): boolean => {
  if (!head) return true;
  if (!root) return false;
  if (root.val === head.val) {
    return parsePreOrder(root.left, head.next) || parsePreOrder(root.right, head.next);
  }
  return false;
};

// // Build the ListNode
// const m = new ListNode(8);
// const l = new ListNode(9, m);
// const k = new ListNode(4, l);

// // Build the treenode
// const j = new TreeNode(3);  // 3
// const i = new TreeNode(1);  // 1

// const h = new TreeNode(8, i, j);  // 4
// const g = new TreeNode(6);  // 4
// const f = new TreeNode(1);  // 4

// const e = new TreeNode(2, g, h);  // 3
// const d = new TreeNode(2, f);  // 3

// const c = new TreeNode(4, e, null);  // 2
// const b = new TreeNode(4, null, d);  // 2

// const a = new TreeNode(1, b, c); // 1

// const hi = isSubPath(k, a);
// console.log(hi);
