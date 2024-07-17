export const myAtoi = (s: string): number => {
  const parsedInput = Number(s.trimStart().replace(/[A-Za-z](.*)/, ''));
  if (isNaN(parsedInput)) {
    return 0;
  }
  if (parsedInput > 2147483647) {
    return 2147483647;
  }
  if (parsedInput < -2147483648) {
    return -2147483648;
  }
  return parsedInput;
};
