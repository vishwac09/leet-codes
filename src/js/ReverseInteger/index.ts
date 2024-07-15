export const reverse = (x: number): number => {
  const isNumber32Bit = (x: number): boolean => {
    return x >= -2147483648 && x <= 2147483647;
  };
  if (isNaN(x) || !isNumber32Bit(x)) {
    return 0;
  }
  let isNegate = false;
  if (x < 0) {
    x = x * -1;
    isNegate = true;
  }
  const reverseString = new String(x).split('').reverse().join('');
  const reversedNumber = isNegate ? Number(reverseString) * -1 : Number(reverseString);
  return isNumber32Bit(reversedNumber) ? reversedNumber : 0;
};
