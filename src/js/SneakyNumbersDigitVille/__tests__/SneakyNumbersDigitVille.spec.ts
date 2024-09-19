import { getSneakyNumbers } from '..';

describe('Problem The Two Sneaky Numbers of Digitville test', () => {
  test('Should return output number list', () => {
    expect(getSneakyNumbers([0, 1, 1, 0])).toStrictEqual([1, 0]);
  });
  test('Random cases', () => {
    expect(getSneakyNumbers([0, 3, 2, 1, 3, 2])).toStrictEqual([3, 2]);
    expect(getSneakyNumbers([7, 1, 5, 4, 3, 4, 6, 0, 9, 5, 8, 2])).toStrictEqual([4, 5]);
  });
});
