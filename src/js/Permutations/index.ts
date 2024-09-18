export function permute(nums: number[]): number[][] {
  if (nums.length === 1) return [nums];
  return solve(nums, 0);
}

function solve(num: number[], idx: number): Array<number[]> {
  const result: Array<number[]> = [];
  if (idx === num.length - 1) {
    return [num];
  }
  let temp: number,
    numCopy = [];
  for (let i = idx; i < num.length; i++) {
    numCopy = [...num];
    temp = numCopy[i];
    numCopy[i] = numCopy[idx];
    numCopy[idx] = temp;
    result.push(...solve(numCopy, idx + 1));
  }
  return result;
}

// const j = permute([1,2,3]);
// console.log({j});
