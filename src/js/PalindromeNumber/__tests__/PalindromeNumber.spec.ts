import { isPalindrome } from '../index';

describe('Problem is palindrome test', () => {
  test('Test should pass and return true value', () => {
    expect(isPalindrome(121)).toBeTruthy();
    expect(isPalindrome(555)).toBeTruthy();
  });
  test('Test should pass and return false value', () => {
    // eslint-disable-next-line @typescript-eslint/no-loss-of-precision
    expect(isPalindrome(2222212321221212321321)).toBeFalsy();
  });
});
