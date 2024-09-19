export function getSneakyNumbers(nums: number[]): number[] {
  const map = new Map<number, number>();
  let count = 2;
  const result = [];
  for (let i = 0; i < nums.length; i++) {
    if (map.get(nums[i]) === undefined) {
      map.set(nums[i], 1);
    } else {
      result.push(nums[i]);
      map.set(nums[i], (map.get(nums[i]) ?? 0) + 1);
      count--;
      if (count === 0) {
        break;
      }
    }
  }
  return result;
}

// const h = getSneakyNumbers([0, 3, 2, 1, 3, 2]);
// console.log(h);
// const h = getSneakyNumbers([7, 1, 5, 4, 3, 4, 6, 0, 9, 5, 8, 2]);
// console.log(h);
// const h = getSneakyNumbers([0, 1, 1, 0]);
// console.log(h);
