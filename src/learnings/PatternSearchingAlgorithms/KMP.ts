function kmp(pattern: string, text: string): boolean {
  // Generate the lps array.
  const lps = Array(pattern.length).fill(-1);
  lps[0] = 0;
  let i = 0,
    j = 1,
    matches = false;
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
  // Here the lps table is generated.
  // Check if the given pattern is found inside the text.
  // i === pointer for the pattern
  i = 0;
  for (j = 0; j < text.length; j++) {
    if (text[j] === pattern[i]) {
      i++;
      if (i === pattern.length) {
        matches = true;
        break;
      }
    } else {
      i = lps[i - 1];
    }
  }
  return matches;
}

const k = 'abcd';
const h = kmp(k.split('').reverse().join(''), k); // 0 0 0 0 1 2 0
console.log(h);
