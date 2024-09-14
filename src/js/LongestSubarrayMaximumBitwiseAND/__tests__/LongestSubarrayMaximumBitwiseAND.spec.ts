import { longestSubarray } from '..';

describe('Problem Longest Subarray With Maximum Bitwise AND test', () => {
  test("Should return output '5F3Z-2E9W' for the given input", () => {
    expect(longestSubarray([1, 2, 3, 3, 2, 2])).toBe(2);
  });
  test('Ramdom cases', () => {
    expect(longestSubarray([1, 2, 3, 4])).toBe(1);
  });
});
