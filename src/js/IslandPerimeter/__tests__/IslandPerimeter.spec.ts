import { islandPerimeter } from '../index';

describe('Problem Island peremiter test', () => {
  test('Test should pass and return 16 as output', () => {
    expect(islandPerimeter([[1, 0]])).toStrictEqual(4);
  });
  test('Random cases', () => {
    expect(islandPerimeter([[1]])).toStrictEqual(4);
    expect(
      islandPerimeter([
        [0, 1, 0, 0],
        [1, 1, 1, 0],
        [0, 1, 0, 0],
        [1, 1, 0, 0],
      ])
    ).toStrictEqual(16);
  });
});
