import { arrangeCoins } from '..';

describe('Problem arranging coins test', () => {
  test('Should return 2 as output', () => {
    expect(arrangeCoins(5)).toEqual(2);
  });
  test('Random cases', () => {
    expect(arrangeCoins(8)).toEqual(3);
    expect(arrangeCoins(0)).toEqual(0);
    expect(arrangeCoins(1)).toEqual(1);
    expect(arrangeCoins(2)).toEqual(1);
    expect(arrangeCoins(3)).toEqual(2);
  });
});
