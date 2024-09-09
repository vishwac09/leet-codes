import { spiralMatrix } from '../index2';
import { ListNode } from '../../../libs/ListNode';

const t = new ListNode(10);
const s = new ListNode(9, t);
const r = new ListNode(8, s);
const q = new ListNode(7, r);
const p = new ListNode(6, q);
const o = new ListNode(5, p);
const n = new ListNode(4, o);
const m = new ListNode(3, n);
const l = new ListNode(2, m);
const k = new ListNode(1, l);

describe('Problem spiral matrix test', () => {
  test('Test should 2d aray', () => {
    const data = spiralMatrix(3, 5, k);
    expect(data[0][0]).toEqual(1);
  });
});
