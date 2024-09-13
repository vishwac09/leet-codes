import { xorQueries } from '../index';

describe('Problem xor queries of a subarray test', () => {
  test('Test should pass and return the true', () => {
    expect(
      xorQueries(
        [1, 3, 4, 8],
        [
          [0, 1],
          [1, 2],
          [0, 3],
          [3, 3],
        ]
      )
    ).toStrictEqual([2, 7, 14, 8]);
  });
  test('Random cases', () => {
    expect(
      xorQueries(
        [4, 8, 2, 10],
        [
          [2, 3],
          [1, 3],
          [0, 0],
          [0, 3],
        ]
      )
    ).toStrictEqual([8, 0, 4, 4]);
  });
});
