import { middleNode } from '../index';
import { ListNode } from '../../../libs/TreeNode';

const c = new ListNode(3);
const b = new ListNode(2, c);
const a = new ListNode(1, b);

const d = new ListNode(3);
const e = new ListNode(2, d);
const f = new ListNode(1, e);
const g = new ListNode(1, f);

describe('Problem middle linked list test', () => {
  test('Test should pass and return ListNode', () => {
    expect(middleNode(a)).toEqual(b);
  });
  test('Random cases', () => {
    expect(middleNode(g)).toEqual(e);
  });
});
