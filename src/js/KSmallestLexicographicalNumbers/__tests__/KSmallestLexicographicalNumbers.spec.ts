import { findKthNumber } from '../index2';

describe('Problem lexicographical number', () => {
  test('Should retur list of number for given input', () => {
    expect(findKthNumber(13, 2)).toStrictEqual(10);
  });
  test('Random cases', () => {
    expect(findKthNumber(1, 1)).toStrictEqual(1);
  });
});
