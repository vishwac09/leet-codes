export const findTheLongestSubstring = (s: string): number => {
  const isVowel = (s: string) => 'aeiou'.indexOf(s);
  const bitMap: { [key: string]: number } = {
    a: 0,
    e: 1,
    i: 2,
    o: 3,
    u: 4,
  };
  let result = 0,
    mask = 0;
  const map = new Map<number, number>();
  map.set(0, -1);
  for (let i = 0; i < s.length; i++) {
    if (isVowel(s[i]) !== -1) {
      const bit = bitMap[s[i]];
      mask ^= 1 << bit;
    }
    if (map.has(mask)) {
      result = Math.max(result, i - map.get(mask)!);
    } else {
      map.set(mask, i);
    }
  }
  return result;
};

// const h = findTheLongestSubstring('eleetminicoworoep');
// console.log(h);
