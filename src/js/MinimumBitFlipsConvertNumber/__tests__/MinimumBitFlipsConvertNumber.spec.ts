import { minBitFlips } from '../index';

describe('Problem minimum bit flips to convert number test', () => {
  test('Test should pass and return array', () => {
    expect(minBitFlips(10, 7)).toStrictEqual(3);
  });
  test('Random cases', () => {
    expect(minBitFlips(3, 4)).toStrictEqual(3);
  });
});
