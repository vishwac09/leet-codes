import { isPowerOfFour } from '../index';

describe('Problem isPowerOfFour test', () => {
  test('Test should pass and return the true', () => {
    expect(isPowerOfFour(1)).toBeTruthy();
    expect(isPowerOfFour(16)).toBeTruthy();
  });
  test('Test should pass and return false', () => {
    expect(isPowerOfFour(15)).toBeFalsy();
  });
});
