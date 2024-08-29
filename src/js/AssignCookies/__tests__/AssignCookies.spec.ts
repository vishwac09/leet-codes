import { findContentChildren } from '..';

describe('Problem assign cookies test', () => {
  test('Should return 1 as output for given input', () => {
    expect(findContentChildren([1, 2], [1, 2, 3])).toEqual(2);
  });
  test('Random cases', () => {
    expect(findContentChildren([1, 2, 3], [1, 1, 1])).toEqual(1);
    expect(findContentChildren([10, 9, 8, 7], [5, 6, 7, 8])).toEqual(2);
  });
});
