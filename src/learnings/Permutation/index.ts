export const permutation = (s: string) => {
  if (s.length === 1) return s;
  const k = solve(s, 0);
  return k.slice(0, -1);
};

const solve = (s: string, idx: number): string => {
  let result = '';
  if (idx === s.length - 1) {
    return s + ',';
  }
  let temp = '';
  for (let i = idx; i < s.length; i++) {
    const stringAsList = s.split('');
    temp = stringAsList[i];
    stringAsList[i] = stringAsList[idx];
    stringAsList[idx] = temp;
    // console.log(stringAsList, idx);
    result += solve(stringAsList.join(''), idx + 1);
  }
  return result;
};

// const res = permutation("abc");
// console.log(res);
