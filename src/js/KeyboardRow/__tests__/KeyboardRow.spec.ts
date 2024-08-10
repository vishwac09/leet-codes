import { findWords } from '..';

describe('Problem keyboard row test', () => {
  test('Should return 2 words for the given input', () => {
    expect(findWords(['Hello', 'Alaska', 'Dad', 'Peace'])).toEqual(['Alaska', 'Dad']);
  });
});
