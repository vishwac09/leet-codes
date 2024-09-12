import { checkPerfectNumber } from '../index';

describe('Problem perfect number test', () => {
  test('Test should pass and return the true', () => {
    expect(checkPerfectNumber(28)).toBeTruthy();
  });
  test('Random cases', () => {
    expect(checkPerfectNumber(7)).toBeFalsy();
  });
});
