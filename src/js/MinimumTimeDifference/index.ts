export const findMinDifference = (timePoints: string[]): number => {
  let min = Number.MAX_VALUE;
  const timeAsMinutes = timePoints.map((a) =>
    a.split(':').reduce((acc, curr, index) => {
      return index === 0 ? Number(curr) * 60 : Number(curr) + acc;
    }, 0)
  );
  timeAsMinutes.sort((a, b) => a - b);
  for (let i = 1; i < timeAsMinutes.length; i++) {
    min = Math.min(timeAsMinutes[i] - timeAsMinutes[i - 1], min);
  }
  // also push the diff of last and 1st element
  const wrapTime = Math.abs(timeAsMinutes[timeAsMinutes.length - 1] - (timeAsMinutes[0] + 1440));
  min = Math.min(wrapTime, min);
  return min;
};

// const h = findMinDifference(["00:00","12:00"]);
// console.log(h);
// const h1 = findMinDifference(['00:00', '23:59', '00:00']);
// console.log(h1);
