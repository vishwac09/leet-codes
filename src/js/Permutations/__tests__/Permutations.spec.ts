import { permute } from '../index';

describe('Test cases to check permutation of list of numbers', () => {
  test('Should return all permutations of the given numbers list', () => {
    expect(permute([1, 2, 3])).toStrictEqual([
      [1, 2, 3],
      [1, 3, 2],
      [2, 1, 3],
      [2, 3, 1],
      [3, 2, 1],
      [3, 1, 2],
    ]);
  });
  test('Random cases', () => {
    expect(permute([0, 1])).toStrictEqual([
      [0, 1],
      [1, 0],
    ]);
    expect(permute([1])).toStrictEqual([[1]]);
  });
});
