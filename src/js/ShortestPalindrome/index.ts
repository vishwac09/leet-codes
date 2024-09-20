export function shortestPalindrome(s: string): string {
  const pattern = s + '#' + s.split('').reverse().join('');
  const lps = Array(pattern.length).fill(-1);
  lps[0] = 0;
  let i = 0,
    j = 1;
  while (j < pattern.length) {
    if (pattern[i] !== pattern[j]) {
      lps[j] = 0;
      j++;
    } else {
      lps[j] = i + 1;
      i++;
      j++;
    }
  }
  return (
    s
      .slice(lps[pattern.length - 1])
      .split('')
      .reverse()
      .join('') + s
  );
}

// const h = shortestPalindrome('abcd');
// console.log(h);
