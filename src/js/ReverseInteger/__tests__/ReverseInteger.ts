import { reverse } from '../index';

describe('Problem reverse integer test', () => {
  test('Test should pass and return the correct value', () => {
    expect(reverse(123)).toStrictEqual(321);
    expect(reverse(99989)).toStrictEqual(98999);
    expect(reverse(-123)).toStrictEqual(-321);
    expect(reverse(-2147483648)).toStrictEqual(0);
  });
  test('Test should pass and return 0', () => {
    // eslint-disable-next-line @typescript-eslint/no-loss-of-precision
    expect(reverse(2222212321221212321321)).toStrictEqual(0);
  });
});
