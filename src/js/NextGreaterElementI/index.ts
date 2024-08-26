export const nextGreaterElement = (nums1: number[], nums2: number[]): number[] => {
  if (nums1.length === 0) {
    return [];
  }
  return nums1.map((elem) => {
    const found = nums2.indexOf(elem);
    if (found !== -1) {
      const greaterThanElem = nums2.slice(found).find((num) => elem < num);
      return greaterThanElem ?? -1;
    }
    return -1;
  });
};

// console.log(nextGreaterElement([1, 3, 5, 2, 4], [6,5,4,3,2,1,7]));
