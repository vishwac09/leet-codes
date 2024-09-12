export const countConsistentStrings = (allowed: string, words: string[]): number => {
  const setOfAlowedString = new Set(allowed);
  let count = words.length;
  words.forEach((word) => {
    for (let i = 0; i < word.length; i++) {
      if (!setOfAlowedString.has(word[i])) {
        count--;
        break;
      }
    }
  });
  return count;
};
