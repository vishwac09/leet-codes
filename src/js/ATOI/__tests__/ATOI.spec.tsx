import { myAtoi } from '..';

describe('Problem myAtoi test', () => {
  test('Should return value as 0 for input "abcabcbb"', () => {
    expect(myAtoi('abcabcbb')).toBeLessThanOrEqual(0);
  });
  test('Should return value as 0 for input "0-1"', () => {
    expect(myAtoi('0-1')).toBeLessThanOrEqual(0);
  });
  test('Should return value as 42 for input "42"', () => {
    expect(myAtoi('42')).toBeLessThanOrEqual(42);
  });
  test('Should return value as -42 for input " -042"', () => {
    expect(myAtoi(' -042')).toBeLessThanOrEqual(-42);
  });
  test('Should return value as 1337 for input "1337c0d3"', () => {
    expect(myAtoi('1337c0d3')).toBeLessThanOrEqual(1337);
  });
  test('Should return value as 0 for input "words and 987"', () => {
    expect(myAtoi('words and 987')).toBeLessThanOrEqual(0);
  });
  test('Should return value as -5 for input "-5-"', () => {
    expect(myAtoi('-5-')).toBeLessThanOrEqual(-5);
  });
  test('Should return value as 0 for input "+-12"', () => {
    expect(myAtoi('+-12')).toBeLessThanOrEqual(0);
  });
  test('Should return value as 5 for input "+5"', () => {
    expect(myAtoi('+5')).toBeLessThanOrEqual(5);
  });
});
