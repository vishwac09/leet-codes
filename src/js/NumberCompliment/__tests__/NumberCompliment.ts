import { findComplement } from '../index';

describe('Problem number compliment test', () => {
  test('Test should pass and return 2 as value', () => {
    expect(findComplement(5)).toStrictEqual(2);
  });
  test('Test should pass and return 0 as value', () => {
    expect(findComplement(1)).toStrictEqual(0);
  });
});
