import { findMinDifference } from '..';

describe('Problem minimum time difference test', () => {
  test('Should return value as 1 for given input', () => {
    expect(findMinDifference(['23:59', '00:00'])).toBe(1);
  });
  test('Radom cases', () => {
    expect(findMinDifference(['00:00', '23:59', '00:00'])).toBe(0);
    expect(findMinDifference(['00:00', '23:59', '00:00'])).toBe(0);
    expect(findMinDifference(['00:00', '12:00'])).toBe(720);
    expect(findMinDifference(['23:30', '00:10'])).toBe(40);
    expect(findMinDifference(['02:45', '11:15', '18:30', '23:55'])).toBe(170);
    expect(findMinDifference(['00:00', '12:34', '23:59', '03:21', '16:45', '07:30', '20:15', '22:22'])).toBe(1);
    expect(findMinDifference(['00:00', '23:59', '00:00', '05:55'])).toBe(0);
  });
});
