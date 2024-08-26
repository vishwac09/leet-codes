import { nextGreaterElement } from '../index';

describe('Problem next greated element test', () => {
  test('Test should pass and return array', () => {
    expect(nextGreaterElement([2, 4], [1, 2, 3, 4])).toStrictEqual([3, -1]);
  });
  test('Random cases', () => {
    expect(nextGreaterElement([4, 1, 2], [1, 3, 4, 2])).toStrictEqual([-1, 3, -1]);
    expect(nextGreaterElement([1, 3, 5, 2, 4], [6, 5, 4, 3, 2, 1, 7])).toStrictEqual([7, 7, 7, 7, 7]);
  });
});
