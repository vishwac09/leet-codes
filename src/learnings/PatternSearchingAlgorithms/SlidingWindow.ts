function slidingWindow(subject = '', pattern = ''): boolean {
  if (subject === '' || pattern === '') {
    return false;
  }
  let patternCharactersMatched = pattern.length;
  // Search for the given pattern inside the string.
  for (let i = 0; i < subject.length; i++) {
    if (pattern[0] === subject[i]) {
      let temp = i;
      for (let j = 0; j < pattern.length; j++) {
        if (pattern[j] === subject[temp]) {
          patternCharactersMatched--;
          temp++;
        } else {
          break;
        }
      }
      if (patternCharactersMatched === 0) {
        break;
      }
      patternCharactersMatched = pattern.length;
    }
  }
  return patternCharactersMatched === 0;
}

const pattern = 'cccdo';
const subject = 'cccccccd';

if (slidingWindow(subject, pattern)) {
  console.log('Given pattern is matching');
} else {
  console.log('Given pattern is not matching');
}
