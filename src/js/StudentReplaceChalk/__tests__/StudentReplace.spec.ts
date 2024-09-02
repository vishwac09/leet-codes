import { chalkReplacer } from '../index';

describe('Problem student that will replace the chalk test', () => {
  test('Test should pass and return 0', () => {
    expect(chalkReplacer([5, 1, 5], 22)).toStrictEqual(0);
  });
  test('Random cases', () => {
    expect(chalkReplacer([3, 4, 1, 2], 25)).toStrictEqual(1);
  });
});
