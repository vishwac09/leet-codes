import { longestSubstring } from '..';

describe('Problem longest substring test', () => {
  test('Should return length as 3 for the given input', () => {
    expect(longestSubstring('abcabcbb')).toBeLessThanOrEqual(3);
  });
  test('Should return length as 1 for the given input', () => {
    expect(longestSubstring('bbbbb')).toBeLessThanOrEqual(1);
  });
  test('Should return length as 3 for the given input', () => {
    expect(longestSubstring('pwwkew')).toBeLessThanOrEqual(3);
  });
});
