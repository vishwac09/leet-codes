import { findRelativeRanks } from '../index';

describe('Problem find relative ranks test', () => {
  test('Test should pass and return the correct value', () => {
    expect(findRelativeRanks([10, 3, 8, 9, 4])).toStrictEqual(['Gold Medal', '5', 'Bronze Medal', 'Silver Medal', '4']);
  });
  test('Random cases', () => {
    expect(findRelativeRanks([5, 4, 3, 2, 1])).toStrictEqual(['Gold Medal', 'Silver Medal', 'Bronze Medal', '4', '5']);
  });
});
