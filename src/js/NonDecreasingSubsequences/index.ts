export const findSubsequences = (nums: number[]): number[][] => {
  let result: { [key: string]: Array<number> } = {};
  for (let i = 0; i < nums.length; i++) {
    for (let j = i + 1; j <= nums.length; j++) {
      result = makeGroups(nums[i], nums.slice(j), result);
    }
  }
  return Object.keys(result).map((e) => result[e]);
};

export const makeGroups = (base: number, group: Array<number>, result: { [key: string]: Array<number> }) => {
  const temp: Array<number> = [base];
  for (let k = 0; k < group.length; k++) {
    if (temp[temp.length - 1] <= group[k]) {
      temp.push(group[k]);
    }
    if (temp.length >= 2) {
      result[temp.join('')] = [...temp];
    }
  }
  return result;
};

findSubsequences([1, 3, 5, 7]);
