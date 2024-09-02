export const isSubsequence = (s: string, t: string): boolean => {
  let j = 0,
    k = 0;
  while (j < s.length && k < t.length) {
    if (s[j] == t[k]) {
      j++;
    }
    k++;
  }
  return j == s.length;
};
