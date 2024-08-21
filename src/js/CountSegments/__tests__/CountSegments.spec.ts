import { countSegments } from '..';

describe('Problem count segments test', () => {
  test('Should return count of words for the given input', () => {
    expect(countSegments('Hello, my name is John')).toEqual(5);
  });
  test('Random cases', () => {
    expect(countSegments('Hello,')).toEqual(1);
    expect(countSegments('')).toEqual(0);
  });
});
