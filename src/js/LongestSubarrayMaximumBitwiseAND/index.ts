export const longestSubarray = (nums: number[]): number => {
  const result = nums.reduce((a, b) => (a > b ? a : b));
  let count = 0,
    max = 0;
  nums.forEach((number) => {
    if (number === result) {
      count++;
      max = max > count ? max : count;
    } else {
      count = 0;
    }
  });
  return max;
};

// const g = longestSubarray([311155, 311155, 311155, 311155, 311155, 311155, 311155, 311155, 201191, 311155]);
// console.log(g);
