export const findWords = (words: string[]): string[] => {
  const keyboardKeys: { [key: string]: string } = {
    1: '^[qwertyuiop]+$',
    2: '^[asdfghjkl]+$',
    3: '^[zxcvbnm]+$',
  };
  const output: Array<string> = [];
  for (let i = 0; i < words.length; i++) {
    for (let j = 1; j <= 3; j++) {
      const regexer = new RegExp(keyboardKeys[j], 'i');
      if (regexer.test(words[i])) {
        output.push(words[i]);
        break;
      }
    }
  }
  return output;
};
