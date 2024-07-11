import { findMedianSortedArrays } from '../index';

describe('Problem median sorted array test', () => {
  test('Test should pass and return 2 as value', () => {
    expect(findMedianSortedArrays([1, 3], [2])).toStrictEqual(2);
  });
  test('Test should pass and return 2.5 as value', () => {
    expect(findMedianSortedArrays([1, 3], [2, 4])).toStrictEqual(2.5);
  });
});
