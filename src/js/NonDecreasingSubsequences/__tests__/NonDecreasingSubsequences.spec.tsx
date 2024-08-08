import { findSubsequences } from '../index';

describe('Problem non decreasing subsequences test', () => {
  test('Test should pass and return array with single element inside it', () => {
    expect(findSubsequences([4, 4, 3, 2, 1])).toStrictEqual([[4, 4]]);
  });
});
