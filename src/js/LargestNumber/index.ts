export function largestNumber(nums: number[]): string {
  nums.sort((a, b) => {
    const aAsString = a.toString();
    const bAsString = b.toString();
    return (bAsString + aAsString).localeCompare(aAsString + bAsString);
  });
  if (nums[0] === 0) return '0';
  return nums.join('');
}
