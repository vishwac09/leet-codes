import { addStrings } from '..';

describe('Problem Add strings test cases', () => {
  test('Should return strig as output', () => {
    expect(addStrings('11', '123')).toBe('134');
  });
  test('Random cases', () => {
    expect(addStrings('456', '77')).toBe('533');
    expect(addStrings('0', '0')).toBe('0');
    expect(addStrings('9333852702227987', '85731737104263')).toBe('9419584439332250');
  });
});
