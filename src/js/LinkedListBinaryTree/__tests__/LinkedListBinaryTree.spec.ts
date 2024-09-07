import { isSubPath } from '..';
import { ListNode } from '../../../libs/ListNode';
import { TreeNode } from '../../../libs/TreeNode';

// Build the ListNode
const m = new ListNode(8);
const l = new ListNode(9, m);
const k = new ListNode(4, l);

// Build the treenode
const j = new TreeNode(3); // 3
const i = new TreeNode(1); // 1

const h = new TreeNode(8, i, j); // 4
const g = new TreeNode(6); // 4
const f = new TreeNode(1); // 4

const e = new TreeNode(2, g, h); // 3
const d = new TreeNode(2, f); // 3

const c = new TreeNode(4, e, null); // 2
const b = new TreeNode(4, null, d); // 2

const a = new TreeNode(1, b, c); // 1

describe('Problem linked list binary tree test', () => {
  test('Should return true as output', () => {
    expect(isSubPath(k, a)).toBeFalsy();
  });
});
