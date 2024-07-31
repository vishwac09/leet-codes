export const findComplement = (num: number): number => {
  // num is decimal
  // convert decimal to binary
  const numBinaryStringArray = num.toString(2).split('');
  for (let i = 0; i < numBinaryStringArray.length; i++) {
    numBinaryStringArray[i] = numBinaryStringArray[i] === '1' ? '0' : '1';
  }
  const binaryReversed = numBinaryStringArray.join('');
  return parseInt(binaryReversed, 2);
};

// const h = findComplement(5);
// console.log(h);
