import { findPoisonedDuration } from '../index';

describe('Problem teemo attacking tests', () => {
  test('Test should pass and return 4 as result', () => {
    expect(findPoisonedDuration([1, 4], 2)).toBe(4);
  });
  test('Random cases', () => {
    expect(findPoisonedDuration([1, 2], 2)).toBe(3);
    expect(findPoisonedDuration([1, 4], 4)).toBe(7);
    expect(findPoisonedDuration([1, 2], 4)).toBe(5);
  });
});
