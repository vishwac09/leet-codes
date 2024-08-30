export const findRelativeRanks = (score: number[]): string[] => {
  if (!score.length) return [];
  const getMedal = (x: number): string => {
    let medal = '';
    switch (x) {
      case 0:
        medal = 'Gold Medal';
        break;
      case 2:
        medal = 'Bronze Medal';
        break;
      case 1:
        medal = 'Silver Medal';
        break;
      default:
        medal = String(x + 1);
    }
    return medal;
  };
  const result = [...score];
  const output: { [key: number]: number } = {};
  const toReturn: string[] = [];
  // Get the first 3 top winners.
  result
    .sort((a, b) => b - a)
    .forEach((item, index) => {
      output[item] = index;
    });
  score.forEach((athleteScore) => {
    const position = output[athleteScore];
    toReturn.push(getMedal(position));
  });
  return toReturn;
};

// const j = findRelativeRanks([10,3,8,9,4]);
// console.log(j);
