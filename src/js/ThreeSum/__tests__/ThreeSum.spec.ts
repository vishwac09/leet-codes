import { threeSum } from '../index';

describe('Problem three sum test', () => {
  test('Test should pass and return the correct indices', () => {
    expect(threeSum([-1, 0, 1, 2, -1, -4])).toStrictEqual([
      [-1, 0, 1],
      [-1, 2, -1],
    ]);
  });
  test('Test should pass and return the correct indices', () => {
    expect(threeSum([0, 0, 0])).toEqual([[0, 0, 0]]);
    expect(threeSum([-2, 0, 1, 1, 2])).toEqual([
      [-2, 0, 2],
      [-2, 1, 1],
    ]);
  });
});
