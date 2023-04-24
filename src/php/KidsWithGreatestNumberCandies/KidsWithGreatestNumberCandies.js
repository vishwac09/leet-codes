/**
 * @param {number[]} candies
 * @param {number} extraCandies
 * @return {boolean[]}
 */
export const kidsWithCandies = function (candies, extraCandies) {
  const big = Math.max(...candies);
  return candies.map((candyKid) => {
    return candyKid + extraCandies >= big ? true : false;
  });
};
