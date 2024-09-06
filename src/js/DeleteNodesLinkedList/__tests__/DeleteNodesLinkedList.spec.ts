import { modifiedList } from '..';
import { ListNode } from '../../../libs/TreeNode';

const d = new ListNode(2);
const c = new ListNode(1, d);
const b = new ListNode(2, c);
const a = new ListNode(1, b);

describe('Problem delete nodes linked list test', () => {
  test('Should return correct list node', () => {
    expect(modifiedList([2], a)).toEqual(a);
  });
  test('Random cases', () => {
    expect(modifiedList([2, 1], a)).toEqual(null);
  });
});
