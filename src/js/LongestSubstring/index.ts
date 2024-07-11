export const longestSubstring = (s = '') => {
  if (!s) {
    return 0;
  }
  let substring = '';
  let max = 0;
  let j = 0; // sub_string index.
  for (let i = 0; i < s.length; i++) {
    substring = s[i];
    j = i + 1;
    while (j < s.length && substring.indexOf(s[j]) === -1) {
      substring += s[j];
      j++;
    }
    max = substring.length > max ? substring.length : max;
  }
  return max;
};
