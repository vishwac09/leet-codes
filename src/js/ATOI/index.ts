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

export const myAtoiSol2 = (s: string): number => {
  s = s.trim();
  if (!s) return 0;
  let toReturn = 0;
  let inputNumbersString = '';
  let isNegative = false,
    isPositive = false;
  for (let i = 0; i < s.length; i++) {
    if (s?.[i] === '-' && isNegative === false && inputNumbersString.length === 0) {
      if (s?.[i + 1]?.match(/\d/) === null) {
        toReturn = 0;
        break;
      }
      isNegative = true;
      continue;
    }
    if (s?.[i] === '+' && isPositive === false && inputNumbersString.length === 0) {
      if (s?.[i + 1]?.match(/\d/) === null) {
        toReturn = 0;
        break;
      }
      isPositive = true;
      continue;
    }
    if (s?.[i].match(/\d/) !== null) {
      inputNumbersString += s[i];
    } else {
      break;
    }
  }
  toReturn = Number(inputNumbersString);
  if (isNegative) {
    toReturn *= -1;
  }
  if (toReturn > 2147483647) {
    return 2147483647;
  }
  if (toReturn < -2147483648) {
    return -2147483648;
  }
  return toReturn;
};
