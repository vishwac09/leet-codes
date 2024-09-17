import { canPlaceFlowers } from '..';

describe('Problem can place flowers test', () => {
  test('Should return true for given input', () => {
    expect(canPlaceFlowers([1, 0, 0, 0, 1], 1)).toBeTruthy();
  });
  test('Random cases', () => {
    expect(canPlaceFlowers([1, 0, 0, 0, 1], 2)).toBeFalsy();
    expect(canPlaceFlowers([0, 0, 1], 1)).toBeTruthy();
    expect(canPlaceFlowers([1, 0, 0], 1)).toBeTruthy();
    expect(canPlaceFlowers([0, 0, 1, 0, 0], 2)).toBeTruthy();
    expect(canPlaceFlowers([0], 1)).toBeTruthy();
    expect(canPlaceFlowers([1, 0, 0, 0, 0, 0, 1], 2)).toBeTruthy();
    expect(canPlaceFlowers([0], 1)).toBeTruthy();
    expect(canPlaceFlowers([1], 1)).toBeFalsy();
    expect(canPlaceFlowers([1], 0)).toBeTruthy();
    expect(canPlaceFlowers([0, 0], 2)).toBeFalsy();
    expect(canPlaceFlowers([0, 0, 1, 0, 0], 1)).toBeTruthy();
    expect(canPlaceFlowers([0, 0, 0, 0, 0, 1, 0, 0], 0)).toBeTruthy();
  });
});

// [0,0,1] , 1
// [1,0,0] , 1
// [0,0,1,0,0] , 2
// [0] , 1
// [1,0,0,0,0,0,1] , 2
