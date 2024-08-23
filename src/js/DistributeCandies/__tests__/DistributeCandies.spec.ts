import { distributeCandies } from '..';

describe('Problem distribute candies test', () => {
  test('Should return 3 as output for the given input', () => {
    expect(distributeCandies([1, 1, 2, 2, 3, 3])).toBe(3);
  });
  test('Random cases', () => {
    expect(distributeCandies([1, 1, 2, 3])).toBe(2);
    expect(distributeCandies([6, 6, 6, 6])).toBe(1);
  });
});
