import { hasAlternatingBits } from '..';

describe('Problem has alternating bits', () => {
  test('Should return boolean true as result', () => {
    expect(hasAlternatingBits(5)).toBeTruthy();
  });
  test('Random cases', () => {
    expect(hasAlternatingBits(7)).toBeFalsy();
    expect(hasAlternatingBits(11)).toBeFalsy();
  });
});
