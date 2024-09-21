import { lexicalOrder } from '..';
import { lexicalOrder as lo } from '../index2';

describe('Problem lexicographical number', () => {
  test('Should retur list of number for given input', () => {
    expect(lexicalOrder(13)).toStrictEqual([1, 10, 11, 12, 13, 2, 3, 4, 5, 6, 7, 8, 9]);
  });
  test('Random cases', () => {
    expect(lexicalOrder(2)).toStrictEqual([1, 2]);
  });
});

describe('Problem lexicographical number 2', () => {
  test('Should retur list of number for given input', () => {
    expect(lo(13)).toStrictEqual([1, 10, 11, 12, 13, 2, 3, 4, 5, 6, 7, 8, 9]);
  });
  test('Random cases', () => {
    expect(lo(2)).toStrictEqual([1, 2]);
    expect(lo(55)).toStrictEqual([
      1, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 2, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 3, 30, 31, 32, 33, 34, 35,
      36, 37, 38, 39, 4, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 5, 50, 51, 52, 53, 54, 55, 6, 7, 8, 9,
    ]);
  });
});
