import { lexicalOrder } from '../index';

describe('Problem lexicographical number', () => {
  test('Should retur list of number for given input', () => {
    expect(lexicalOrder(13)).toStrictEqual([1, 10, 11, 12, 13, 2, 3, 4, 5, 6, 7, 8, 9]);
  });
  test('Random cases', () => {
    expect(lexicalOrder(2)).toStrictEqual([1, 2]);
  });
});
