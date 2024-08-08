export const isPowerOfFour = (n: number): boolean => {
  // Base case: if n is 1, it's a power of four (4^0 === 1)
  if (n === 1) return true;

  // Base case: if n is less than 1 or not divisible by 4, it's not a power of 4
  if (n <= 0 || n % 4 !== 0) return false;

  // Recursive step: divide n by 4 and checked
  return isPowerOfFour(n / 4);
};
