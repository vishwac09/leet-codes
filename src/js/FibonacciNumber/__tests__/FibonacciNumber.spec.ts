import { fib } from '..';

describe('Problem fibonacci number test', () => {
  test('Should return output as 1', () => {
    expect(fib(2)).toBe(1);
  });
  test('Random cases', () => {
    expect(fib(0)).toBe(0);
    expect(fib(1)).toBe(1);
    expect(fib(3)).toBe(2);
    expect(fib(4)).toBe(3);
  });
});
