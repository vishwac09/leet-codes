export const findMedianSortedArrays = (nums1: number[], nums2: number[]): number => {
  const resultNums = [...nums1, ...nums2].sort();
  const mid = Math.floor(resultNums.length / 2);
  if (resultNums.length % 2 === 1) {
    // odd.
    return resultNums[mid];
  }
  // even.
  return (resultNums[mid] + resultNums[mid - 1]) / 2;
};
