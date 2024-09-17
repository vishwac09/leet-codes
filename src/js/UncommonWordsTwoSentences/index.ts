export const uncommonFromSentences = (s1: string, s2: string): string[] => {
  let count: number | undefined = 0;
  const uncommonWordsMap = new Map<string, number>();
  const result: Array<string> = [];
  const s1List = s1.split(' ');
  const s2List = s2.split(' ');
  for (let i = 0; i < s1List.length + Math.abs(s1List.length - s2List.length); i++) {
    if (s1List[i] !== undefined) {
      count = uncommonWordsMap.get(s1List[i]);
      uncommonWordsMap.set(s1List[i], count !== undefined ? count + 1 : 1);
      count = 0;
    }
    if (s2List[i] !== undefined) {
      count = uncommonWordsMap.get(s2List[i]);
      uncommonWordsMap.set(s2List[i], count !== undefined ? count + 1 : 1);
      count = 0;
    }
  }

  for (const [k, v] of uncommonWordsMap) {
    if (v === 1) {
      result.push(k);
    }
  }

  return result;
};

// const h = uncommonFromSentences('this apple is sweet', 'this apple is sour');
// console.log(h);
