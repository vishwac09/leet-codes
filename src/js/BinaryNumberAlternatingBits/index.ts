export const hasAlternatingBits = (n: number): boolean => {
  const nAsBinary = n.toString(2);
  let result = true;
  for (let i = 0; i < nAsBinary.length - 1; i++) {
    if (nAsBinary[i] === nAsBinary[i + 1]) {
      result = false;
      break;
    }
  }
  return result;
};
