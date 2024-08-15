export const licenseKeyFormatting = (s: string, k: number): string => {
  const cleanedInputString = s.replaceAll('-', '').toUpperCase();
  const firstGroupCharsCount = cleanedInputString.length % k || k;
  // console.log(firstGroupCharsCount, (cleanedInputString.length % k));
  let toReturn = '',
    position = 0;
  for (let i = 0; i < cleanedInputString.length; i++) {
    toReturn += cleanedInputString[i];
    // First process the first part.
    if (i < firstGroupCharsCount && i === firstGroupCharsCount - 1) {
      toReturn += '-';
    } else if (i > firstGroupCharsCount - 1) {
      // console.log(2);
      // Now process the remaining part.
      position++;
      if (position === k) {
        toReturn += '-';
        position = 0;
      }
    }
  }
  if (toReturn.endsWith('-')) {
    return toReturn.slice(0, -1);
  }
  return toReturn;
};

// const y = licenseKeyFormatting('5F3Z-2e-9-w', 4);
// console.log(y);

// 5F3Z-2e-9-w
// 5F3Z2e9w
