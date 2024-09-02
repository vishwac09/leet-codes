import { isSubsequence } from '../index';

describe('Problem isSubsequence test', () => {
  test('Test should pass and return true value', () => {
    expect(isSubsequence('abc', 'ahbgdc')).toBeTruthy();
  });
  test('Random cases', () => {
    expect(isSubsequence('axc', 'ahbgdc')).toBeFalsy();
  });
});
