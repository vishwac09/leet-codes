import { getLucky } from '../index';

describe('Problem sum of digit string after convert test', () => {
  test('Test should pass and return 36', () => {
    expect(getLucky('iiii', 1)).toStrictEqual(36);
  });
  test('Random cases', () => {
    expect(getLucky('leetcode', 2)).toStrictEqual(6);
  });
});
