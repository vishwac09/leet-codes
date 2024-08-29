import { findMaxConsecutiveOnes } from '..';

describe('Problem max consecutive ones test', () => {
  test('Should return value as 3 for given input', () => {
    expect(findMaxConsecutiveOnes([1, 1, 0, 1, 1, 1])).toBe(3);
  });
  test('Radom cases', () => {
    expect(findMaxConsecutiveOnes([1, 0, 1, 1, 0, 1])).toBe(2);
    expect(findMaxConsecutiveOnes([1, 1])).toBe(2);
    expect(findMaxConsecutiveOnes([0, 0, 0, 0, 0, 0])).toBe(0);
    expect(findMaxConsecutiveOnes([1, 1, 1, 1, 1, 1, 1, 1, 1])).toBe(9);
  });
});
