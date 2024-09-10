import { minOperations } from '..';

describe('Problem minimum operations to exceed threshold', () => {
  test('Should return output as 3', () => {
    expect(minOperations([2, 11, 10, 1, 3], 10)).toBe(3);
  });
  test('Random cases', () => {
    expect(minOperations([1, 1, 2, 4, 9], 1)).toBe(0);
    expect(minOperations([1, 1, 2, 4, 9], 9)).toBe(4);
  });
});
