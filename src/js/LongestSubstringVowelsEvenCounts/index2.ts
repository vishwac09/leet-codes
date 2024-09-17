export const findTheLongestSubstring2 = (s: string): number => {
  const isVowel = (s: string) => 'aeiou'.includes(s);
  const bitMap: { [key: string]: number } = {
    a: 0,
    e: 0,
    i: 0,
    o: 0,
    u: 0,
  };
  let length = 0;
  for (let i = 0; i < s.length; i++) {
    if (isVowel(s[i])) {
      bitMap[s[i]]++;
    }
    if ((bitMap['a'] + bitMap['e'] + bitMap['i'] + bitMap['o'] + bitMap['u']) % 2 === 0) {
      length = i - length;
    }
  }
  return length === 0 ? s.length : length;
};

// const h = findTheLongestSubstring2('eleetminicoworoep');
// console.log(h);
