export const myAtoi = (s: string): number => {
  const inputTrimmedRegxd = s.trimStart().replace(/[A-Za-z](.*)/, '');
  let inputToNumberString = '';
  const isNegative = inputTrimmedRegxd?.[0] === '-';
  for (let i = 0; i < inputTrimmedRegxd.length; i++) {
    if (isNegative && i === 0) {
      continue;
    }
    if (!isNaN(Number(inputTrimmedRegxd[i]))) {
      inputToNumberString += inputTrimmedRegxd[i];
    } else {
      break;
    }
  }
  const numberDerivedFromInput = Number(inputToNumberString) * (isNegative ? -1 : 1);
  if (isNaN(numberDerivedFromInput)) {
    return 0;
  }
  if (numberDerivedFromInput > 2147483647) {
    return 2147483647;
  }
  if (numberDerivedFromInput < -2147483648) {
    return -2147483648;
  }
  return numberDerivedFromInput;
};
