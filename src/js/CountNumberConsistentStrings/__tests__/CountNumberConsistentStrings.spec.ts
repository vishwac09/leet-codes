import { countConsistentStrings } from '..';

describe('Problem Count number of consistent string tests', () => {
  test('Should return 2 as output', () => {
    expect(countConsistentStrings('ab', ['ad', 'bd', 'aaab', 'baa', 'badab'])).toBe(2);
  });

  test('Random cases', () => {
    expect(countConsistentStrings('abc', ['a', 'b', 'c', 'ab', 'ac', 'bc', 'abc'])).toBe(7);
    expect(countConsistentStrings('cad', ['cc', 'acd', 'b', 'ba', 'bac', 'bad', 'ac', 'd'])).toBe(4);
  });
});
