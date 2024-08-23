export const distributeCandies = (candyType: number[]): number => {
  const maxAllowedToEat = Math.floor(candyType.length / 2);
  const candyTypeGroup: { [key: string]: number } = {};
  candyType.forEach((val) => {
    candyTypeGroup[val] = candyTypeGroup[val] === undefined ? 1 : candyTypeGroup[val] + 1;
  });
  const candyTypeGroupCount = Object.keys(candyTypeGroup).length;
  if (maxAllowedToEat <= candyTypeGroupCount) {
    return maxAllowedToEat;
  }
  return candyTypeGroupCount;
};

//distributeCandies([1,1,2,2,3,3]);
// max = 3, group = 3

// 1,1,2,3
// max = 2, group = 3 = 2

// 1,1,1,1
// max = 2, group = 1
