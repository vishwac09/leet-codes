export const convert = (s: string, numRows: number): string => {
  if (s.length < numRows) {
    return s;
  }
  if (numRows === 1) {
    return s;
  }
  let i = 0,
    reverse = false,
    outputText = '';
  const op: { [key: number]: string } = {};
  for (let k = 0; k < s.length; k++) {
    op[i] = op[i] === undefined ? s[k] : op[i] + s[k];
    i = reverse ? i - 1 : i + 1;
    if (i === numRows) {
      i = numRows - 2;
      reverse = true;
    }
    if (i < 0) {
      i = 1;
      reverse = false;
    }
  }
  for (let k = 0; k < numRows; k++) {
    outputText += op[k] ?? '';
  }
  return outputText;
};
