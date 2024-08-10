export const readBinaryWatch = (turnedOn: number): string[] => {
  if (turnedOn > 8) {
    return [];
  }
  const time: Array<string> = [];
  const countOnes = (num: number) => num.toString(2).split('1').length - 1;
  for (let i = 0; i < 12; i++) {
    for (let j = 0; j < 60; j++) {
      if (countOnes(i) + countOnes(j) === turnedOn) {
        time.push(`${i}:${String(j).padStart(2, '0')}`);
      }
    }
  }
  return time;
};
