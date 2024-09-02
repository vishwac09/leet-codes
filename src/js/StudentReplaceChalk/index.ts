export const chalkReplacer = (chalk: number[], k: number): number => {
  const total = chalk.reduce((total, currentVal) => total + currentVal);
  let student = 0;
  k = k % total;
  if (k === 0) {
    return student;
  } else {
    while (k !== 0) {
      if (chalk[student] > k) {
        break;
      }
      k -= chalk[student];
      student++;
    }
  }
  return student;
};
//
// const j = chalkReplacer([5,1,5], 22);
// const j = chalkReplacer([3,4,1,2], 25);
// console.log(j);
