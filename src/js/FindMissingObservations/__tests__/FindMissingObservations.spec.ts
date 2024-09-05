import { missingRolls } from '../index';

describe('Problem Find missing observations test', () => {
  test('Test should pass and return array as output', () => {
    expect(missingRolls([3, 2, 4, 3], 4, 2)).toEqual([6, 6]);
  });
  test('Random cases', () => {
    expect(missingRolls([1, 5, 6], 3, 4)).toEqual([3, 2, 2, 2]);
    expect(missingRolls([1, 2, 3, 4], 6, 4)).toEqual([]);
  });
});
