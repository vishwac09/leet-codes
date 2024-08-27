export const findPoisonedDuration = (timeSeries: number[], duration: number): number => {
  if (duration === 0) return 0;
  if (timeSeries.length === 1) return duration;
  let tpd = 0,
    currentDuration = 0;
  for (let i = 0; i < timeSeries.length; i++) {
    currentDuration = timeSeries[i] + duration - 1;
    tpd += duration;
    if (timeSeries?.[i + 1] && currentDuration >= timeSeries?.[i + 1]) {
      tpd -= currentDuration - timeSeries?.[i + 1] + 1;
    }
  }
  return tpd;
};

// const k = findPoisonedDuration([1, 4], 2);
// const k = findPoisonedDuration([1, 2], 2);
// const k = findPoisonedDuration([1, 4], 4);
// console.log(k);

// 1, 4 ===== 4
// 1, 2, 3, 4 === 4
// 4, 5, 6, 7 === 4

// 1, 2 === 4
// 1, 2, 3, 4 === 4
// 2, 3, 4, 5 === 4
