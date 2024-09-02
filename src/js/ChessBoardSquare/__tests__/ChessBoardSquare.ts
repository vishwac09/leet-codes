import { checkTwoChessboards } from '..';

describe('Problem ches board square test', () => {
  test('Should return true for given input', () => {
    expect(checkTwoChessboards('a1', 'c3')).toBeTruthy();
  });
  test('Random cases', () => {
    expect(checkTwoChessboards('a1', 'h3')).toBeFalsy();
  });
});
