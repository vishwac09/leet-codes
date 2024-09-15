import { findTheLongestSubstring } from '..';

describe('Problem Find the Longest Substring Containing Vowels in Even Counts test', () => {
  test('Should return length as 13 for the given input', () => {
    expect(findTheLongestSubstring('eleetminicoworoep')).toBe(13);
  });
  test('Random cases', () => {
    expect(findTheLongestSubstring('leetcodeisgreat')).toBe(5);
    expect(findTheLongestSubstring('bcbcbc')).toBe(6);
  });
});
