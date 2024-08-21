export const arrangeCoins = (n: number): number => {
  let row = 1;
  while (n > 0) {
    if (row > n) {
      break;
    }
    n = n - row;
    row += 1;
  }
  return row - 1;
};
