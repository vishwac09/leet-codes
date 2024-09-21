import { shortestPalindrome } from '../index';

describe('Problem shortest palindrome test', () => {
  test('Test should pass and return the correct value', () => {
    expect(shortestPalindrome('aacecaaa')).toBe('aaacecaaa');
  });
  test('Random cases', () => {
    expect(shortestPalindrome('abcd')).toBe('dcbabcd');
    expect(shortestPalindrome('abb')).toBe('bbabb');
  });
});
