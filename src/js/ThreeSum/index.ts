export const threeSum = (nums: number[]): number[][] => {
  const result: Array<Array<number>> = [];
  const map: { [key: string]: boolean } = {};
  for (let i = 0; i < nums.length; i++) {
    let m = i + 1;
    while (m < nums.length) {
      let n = m + 1;
      while (n < nums.length) {
        const sum = nums[i] + nums[m] + nums[n] === 0 ? true : false;
        const uniqueKey = [nums[i], nums[m], nums[n]].sort().join('');
        if (sum && map[uniqueKey] === undefined) {
          result.push([nums[i], nums[m], nums[n]]);
          map[uniqueKey] = true;
        }
        n++;
      }
      m++;
    }
  }
  return result;
};

// const j = threeSum([-2, 0, 1, 1, 2]);
// console.log(j);
