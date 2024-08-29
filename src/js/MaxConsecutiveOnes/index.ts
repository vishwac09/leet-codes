export const findMaxConsecutiveOnes = (nums: number[]): number => {
  let maxOnes = 0,
    lastOneCount = 0;
  if (nums.indexOf(0) === -1) {
    return nums.length;
  }
  nums.forEach((number) => {
    if (number === 1) {
      maxOnes++;
    } else {
      lastOneCount = maxOnes > lastOneCount ? maxOnes : lastOneCount;
      maxOnes = 0;
    }
  });
  lastOneCount = maxOnes > lastOneCount ? maxOnes : lastOneCount;
  return lastOneCount;
};
