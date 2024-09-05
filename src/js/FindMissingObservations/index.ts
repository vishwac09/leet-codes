export const missingRolls = (rolls: number[], mean: number, n: number): number[] => {
  const totalRolls = rolls.length + n;
  const mRollsSum = rolls.reduce((acc, item) => acc + item);
  const nRollSumNeeded = totalRolls * mean - mRollsSum;

  if (nRollSumNeeded > n * 6) {
    return [];
  }

  const result: Array<number> = Array(n).fill(Math.floor(nRollSumNeeded / n));
  let remainder = nRollSumNeeded % n;
  let i = 0;
  while (remainder > 0) {
    result[i] += 1;
    remainder -= 1;
    i++;
  }
  return result;
};

// const h = missingRolls([1, 5, 6], 3, 4);
// console.log(h);
