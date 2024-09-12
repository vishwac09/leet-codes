export const minBitFlips = (start: number, goal: number): number => {
  const BASE = 2;
  let startBinary = start.toString(BASE);
  let goalBinary = goal.toString(BASE);
  let count = 0;
  if (start < goal) {
    startBinary = startBinary.padStart(goalBinary.length, '0');
  } else if (goal < start) {
    goalBinary = goalBinary.padStart(startBinary.length, '0');
  }
  for (let i = 0; i < startBinary.length; i++) {
    if (startBinary[i] !== goalBinary[i]) {
      count++;
    }
  }
  return count;
};

// const h = minBitFlips(5, 32);
// console.log(h);
