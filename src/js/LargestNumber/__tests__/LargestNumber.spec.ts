import { largestNumber } from '..';

describe('Problem largest number test', () => {
  test('Should return output as string for the given input', () => {
    expect(largestNumber([10, 2])).toEqual('210');
  });
  test('Ramdom cases', () => {
    expect(largestNumber([3, 30, 34, 5, 9])).toEqual('9534303');
  });
});
