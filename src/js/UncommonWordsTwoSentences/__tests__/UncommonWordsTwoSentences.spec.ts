import { uncommonFromSentences } from '../index';

describe('Problem Uncommon Words from Two Sentences test', () => {
  test('Test should pass and return the string list', () => {
    expect(uncommonFromSentences('this apple is sweet', 'this apple is sour')).toStrictEqual(['sweet', 'sour']);
  });
  test('Random cases', () => {
    expect(uncommonFromSentences('apple apple', 'banana')).toStrictEqual(['banana']);
    expect(uncommonFromSentences('sour', 'this apple is sour')).toStrictEqual(['this', 'apple', 'is']);
  });
});
