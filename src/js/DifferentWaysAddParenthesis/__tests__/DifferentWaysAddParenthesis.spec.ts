import { diffWaysToCompute } from '..';

describe('Problem Different Ways to Add Parentheses test', () => {
  test('Should return result as list of number', () => {
    expect(diffWaysToCompute('2-1-1')).toStrictEqual([2, 0]);
  });
  test('Random cases', () => {
    expect(diffWaysToCompute('2*3-4*5')).toStrictEqual([-34, -10, -14, -10, 10]);
  });
});
