import { maxProductDifference } from '..';

describe('Problem maxProductDifference test', () => {
  test('Should return value as 34 for given input', () => {
    expect(maxProductDifference([5, 6, 2, 7, 4])).toBe(34);
  });
  test('Should return value as 64 for given input', () => {
    expect(maxProductDifference([4, 2, 5, 9, 7, 4, 8])).toBe(64);
  });
  test('Should return value as 68 for given input', () => {
    expect(maxProductDifference([1, 6, 7, 5, 2, 4, 10, 6, 4])).toBe(68);
  });
});
