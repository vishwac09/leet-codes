export function canPlaceFlowers(flowerbed: number[], n: number): boolean {
  if ((flowerbed.length === 1 && flowerbed[0] === 0 && n === 1) || n === 0) return true;
  if (flowerbed[0] === 0 && flowerbed[1] === 0) {
    flowerbed[0] = 1;
    n--;
  }
  for (let i = 1; i < flowerbed.length; i++) {
    if (flowerbed[i] === 0 && n != 0) {
      if (flowerbed?.[i - 1] !== 1 && flowerbed?.[i + 1] !== 1) {
        flowerbed[i] = 1;
        n--;
      }
    }
  }
  return n === 0;
}

// const h = canPlaceFlowers([1, 0, 0, 0, 1], 1);
// console.log(h);

// const h1 = canPlaceFlowers([1, 0, 0, 0, 1], 2);
// console.log(h1);

// const h3 = canPlaceFlowers([0, 0, 1, 0, 0], 1);
// console.log(h3);
