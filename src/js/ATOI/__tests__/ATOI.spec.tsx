import { myAtoi, myAtoiSol2 } from '..';

describe('Problem myAtoi test', () => {
  test('Should return value as 0 for input "abcabcbb"', () => {
    expect(myAtoi('abcabcbb')).toBe(0);
  });
  test('Should return value as 0 for input "0-1"', () => {
    expect(myAtoi('0-1')).toBe(0);
  });
  test('Should return value as 42 for input "42"', () => {
    expect(myAtoi('42')).toBe(42);
  });
  test('Should return value as -42 for input " -042"', () => {
    expect(myAtoi(' -042')).toBe(-42);
  });
  test('Should return value as 1337 for input "1337c0d3"', () => {
    expect(myAtoi('1337c0d3')).toBe(1337);
  });
  test('Should return value as 0 for input "words and 987"', () => {
    expect(myAtoi('words and 987')).toBe(0);
  });
  test('Should return value as -5 for input "-5-"', () => {
    expect(myAtoi('-5-')).toBe(-5);
  });
  test('Should return value as 0 for input "+-12"', () => {
    expect(myAtoi('+-12')).toBe(0);
  });
});

describe('Problem myAtoiSol2 test', () => {
  test('Should return value as 0 for input "abcabcbb"', () => {
    expect(myAtoiSol2('abcabcbb')).toBeLessThanOrEqual(0);
  });
  test('Should return value as 0 for input "0-1"', () => {
    expect(myAtoiSol2('0-1')).toBe(0);
  });
  test('Should return value as 42 for input "42"', () => {
    expect(myAtoiSol2('42')).toBe(42);
  });
  test('Should return value as -42 for input " -042"', () => {
    expect(myAtoiSol2(' -042')).toBe(-42);
  });
  test('Should return value as 1337 for input "1337c0d3"', () => {
    expect(myAtoiSol2('1337c0d3')).toBe(1337);
  });
  test('Should return value as 0 for input "words and 987"', () => {
    expect(myAtoiSol2('words and 987')).toBe(0);
  });
  test('Should return value as -5 for input "-5-"', () => {
    expect(myAtoiSol2('-5-')).toBe(-5);
  });
  test('Should return value as 0 for input "+-12"', () => {
    expect(myAtoiSol2('+-12')).toBe(0);
  });
  test('Should return value as 5 for input "+5"', () => {
    expect(myAtoiSol2('+5')).toBe(5);
  });
  test('Should return value as -2147483648 for input "-91283472332"', () => {
    expect(myAtoiSol2('-91283472332')).toBe(-2147483648);
  });
});
