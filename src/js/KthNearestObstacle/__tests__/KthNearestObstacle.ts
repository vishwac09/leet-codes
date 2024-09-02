import { resultsArray } from '..';

describe('Problem Kth nearest obstacle test', () => {
  test('Should return output array for the given input', () => {
    expect(
      resultsArray(
        [
          [1, 2],
          [3, 4],
          [2, 3],
          [-3, 0],
        ],
        2
      )
    ).toEqual([-1, 7, 5, 3]);
  });
  test('Ramdom cases', () => {
    expect(
      resultsArray(
        [
          [5, 5],
          [4, 4],
          [3, 3],
        ],
        1
      )
    ).toEqual([10, 8, 6]);
    expect(
      resultsArray(
        [
          [7, 7],
          [-9, 4],
        ],
        2
      )
    ).toEqual([-1, 14]);
  });
});
